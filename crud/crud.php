<?php
	error_reporting(E_ALL);
	ini_set("display_errors","On");

	if (!isset($_REQUEST["action"])) {
		exit;
	}

	class Acciones
	{
		function cargarDB($t)
		{
			if ($t == "p") {
				$db = new SQLite3('phpliteadmin/cne');
			}
			else {
				$db = new SQLite3('phpliteadmin/flisol');
			}
			return $db;
		}

		function comprobarAsistencia($cedula)
		{
			$dbf = Acciones::cargarDB("f");
			$resultado = array();

			$comprobar = $dbf->query("SELECT * FROM asistentes WHERE cedula = '$cedula'");

			while ($row = $comprobar->fetchArray()) {
				$resultado[] = $row;
			}

			if (!$resultado) {
				return true;
			}
			else {
				return false;
			}
		}
		
		function buscarPersona($nac, $ced)
		{
			$dbp = Acciones::cargarDB("p");
			$resultado = array();

			$busqueda = $dbp->query("SELECT * FROM persona WHERE nacionalidad = '$nac' AND cedula = '$ced'");

			while ($row = $busqueda->fetchArray()) {
				$resultado[] = $row;
			}

			if (!$resultado) {
				print '{"success": false, "message": "No existe el registro"}';
			}
			else {
				$comprobar_asistente = Acciones::comprobarAsistencia($ced);

				if ($comprobar_asistente == false) {
					print '{"success": false, "message": "Usuario Registrado"}';
				}
				else {
					print '{"nombres": "'.$resultado[0]['primer_apellido'] . ' ' . $resultado[0]['segundo_apellido'].'" , "apellidos": "'.$resultado[0]['primer_nombre'] . ' ' . $resultado[0]['segundo_nombre'].'"}';
				}
			}
		}

		function registrarAsistente($nacionalidad,$cedula,$nombres,$apellidos,$sexo,$correo,$conocimiento,$asistencia,$asistente,$comunidad)
		{
			$dbf = Acciones::cargarDB("f");
			
			$insertar = $dbf->query("INSERT INTO asistentes (ide,cedula,nacionalidad,nombres,apellidos,sexo,correo,conocimiento,asistencia,asistente,comunidad) VALUES (1,'$cedula','$nacionalidad','$nombres','$apellidos','$sexo','$correo','$conocimiento','$asistencia','$asistente','$comunidad')");

			if (!$insertar) {
				print '{"success": false, "message": "No se guardó"}';
			}
			else {
				print '{"success": true, "message": "Guardado"}';
			}
		}
	}

	$acciones = new Acciones;
	$action = $_REQUEST["action"];

	switch ($action) {
		case 'buscar':
			$acciones->buscarPersona($_REQUEST['nacionalidad'],$_REQUEST['cedula']);
		break;

		case 'registrar':
			$acciones->registrarAsistente($_REQUEST['nacionalidad'], $_REQUEST['cedula'], $_REQUEST['nombres'], $_REQUEST['apellidos'], $_REQUEST['sexo'], $_REQUEST['correo'], $_REQUEST['conocimiento'], $_REQUEST['asistencia'], $_REQUEST['asistente'], $_REQUEST['comunidad']);
		break;
	}
?>