<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos al Flisol Cumaná 2017</title>
	<link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
	<link href="vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet">
	<link href="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
	<link href="vendors/materialIcons/css/materialdesignicons.css" rel="stylesheet">
	<link href="vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">

	<!-- CSS -->
	<link href="css/app_1.css" rel="stylesheet">
	<link href="css/app_2.css" rel="stylesheet">
</head>
<body>
	<!-- <header id="header" class="clearfix bgm-green" data-ma-theme="blue">
		<ul class="h-inner clearfix">
			<li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
				<div class="line-wrap">
					<div class="line top"></div>
					<div class="line center"></div>
					<div class="line bottom"></div>
				</div>
			</li>
			<li class="hi-logo hidden-xs">
				<a href="./">Bienvenido al FLISOL Cumaná 2017</a>
			</li>
			<li class="pull-right">
				<ul class="hi-menu">
					<li>
						<a href="panillas.php" data-original-title="Lista" data-toggle="tooltip" data-placement="bottom">
							<i class="him-icon zmdi zmdi-view-list-alt"></i>
						</a>
					</li>
				</ul>
			</li>
		</ul>
		<div class="h-search-wrap">
			<div class="hsw-inner">
				<i class="hsw-close zmdi zmdi-search c-red" data-ma-action="search-close"></i>
				<input type="text" placeholder="Introduzca el código de la planilla" autocomplete="off">
			</div>
		</div>
	</header> -->
	<section id="" class="m-t-25">
		<div class="row">
			<!-- <div class="col-xs-5 center-block" style="float:none;"> -->
			<div class="container">
				<div class="block-header">
					<h2>Bienvenido al FLISOL Cumaná 2017</h2>
				</div>
				<form action="" role="form" class="form-horizontal">
					<div class="col-xs-6">
						<div class="card z-depth-3">
							<div class="card-body card-padding">
								<div class="form-group">
									<div class="col-xs-3 text-right">
										<label class="control-label f-500 text-uppercase">Sexo</label>
									</div>
									<div class="col-xs-9 text-uppercase">
										<div class="radio m-b-15">
											<label>
												<input name="sample" value="m" type="radio" checked>
												<i class="input-helper"></i> Masculino
											</label>
										</div>
										<div class="radio m-b-15">
											<label>
												<input name="sample" value="f" type="radio">
												<i class="input-helper"></i> Femenino
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-3 text-right">
										<label for="i-td" class="control-label f-500 text-uppercase">Documento</label>
									</div>
									<div class="col-xs-3">
										<select name="" id="s-td" class="selectpicker text-uppercase">
											<option value="1" selected>Cédula</option>
											<option value="2">Pasaporte</option>
											<option value="3">Extrangero</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-3 text-right">
										<label for="i-cedula" class="control-label f-500 text-uppercase">Número de Documento</label>
									</div>
									<div class="col-xs-3">
										<div class="fg-line">
											<input type="text" id="i-cedula" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-3 text-right">
										<label for="i-nombres" class="control-label f-500 text-uppercase">Nombres</label>
									</div>
									<div class="col-xs-9">
										<div class="fg-line">
											<input type="text" class="form-control" id="i-nombres"></input>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-3 text-right">
										<label for="i-apellidos" class="control-label f-500 text-uppercase">Apellido</label>
									</div>
									<div class="col-xs-9">
										<div class="fg-line">
											<input type="text" class="form-control" id="i-apellidos"></input>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-3 text-right">
										<label for="i-correo" class="control-label f-500 text-uppercase">Correo</label>
									</div>
									<div class="col-xs-9">
										<div class="fg-line">
											<input type="text" id="i-correo" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-3">
										<label for="" class="control-label text-right text-uppercase">Tipo de Asistencia</label>
									</div>
									<div class="col-xs-9 text-uppercase">
										<div class="checkbox m-b-15">
											<label>
												<input type="checkbox" value="1">
												<i class="input-helper"></i> Asistente
											</label>
										</div>
										<div class="checkbox m-b-15">
											<label>
												<input type="checkbox" value="2">
												<i class="input-helper"></i> Instalación
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="card z-depth-3">
							<div class="card-body card-padding">
								<div class="form-group">
									<div class="col-xs-3">
										<label for="" class="control-label text-right text-uppercase">Tipo de Asistente</label>
									</div>
									<div class="col-xs-9 text-uppercase">
										<div class="radio m-b-15">
											<label>
												<input name="tipo-asistente" value="1" type="radio" checked>
												<i class="input-helper"></i> Comunidad
											</label>
										</div>
										<div class="radio m-b-15">
											<label>
												<input name="tipo-asistente" value="2" type="radio">
												<i class="input-helper"></i> Estudiante
											</label>
										</div>
										<div class="radio m-b-15">
											<label>
												<input name="tipo-asistente" value="3" type="radio">
												<i class="input-helper"></i> Funcionario Público
											</label>
										</div>
										<div class="radio m-b-15">
											<label>
												<input name="tipo-asistente" value="4" type="radio">
												<i class="input-helper"></i> Funcionario Privado
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-3 text-right">
										<label for="i-comunidad" class="control-label f-500 text-uppercase">Comunidad que representa</label>
									</div>
									<div class="col-xs-9">
										<div class="fg-line">
											<input type="text" id="i-comunidad" class="form-control" placeholder="Comunidad / Casa de estudio / Organización">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-3">
										<label for="" class="control-label text-right text-uppercase">Nivel de Conocimiento</label>
									</div>
									<div class="col-xs-9 text-uppercase">
										<div class="radio m-b-15">
											<label>
												<input name="tipo-conocimiento" value="1" type="radio" checked>
												<i class="input-helper"></i> Ninguno, quiero aprender
											</label>
										</div>
										<div class="radio m-b-15">
											<label>
												<input name="tipo-conocimiento" value="2" type="radio">
												<i class="input-helper"></i> Básico, quiero conoser más
											</label>
										</div>
										<div class="radio m-b-15">
											<label>
												<input name="tipo-conocimiento" value="3" type="radio">
												<i class="input-helper"></i> Medio
											</label>
										</div>
										<div class="radio m-b-15">
											<label>
												<input name="tipo-conocimiento" value="4" type="radio">
												<i class="input-helper"></i> Avanzado
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="container">
					<div class="row">
						<div class="col-xs-2 text-right pull-right">
							<button class="btn btn-lg btn-primary">Registrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="container">
			<div class="card">
				<div class="card-body card-padding">
					<form action="" role="form" class="form-horizontal">
						<div class="row text-uppercase">
							<div class="col-xs-6">
								<div class="row">
									
									
								</div>
								<div class="row m-t-25">
									
								</div>
							</div>
							<div class="col-xs-6"></div>
						</div>
					</form>
				</div>
			</div>
		</div> -->
	</section>
</body>
	<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
	<script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
	<script src="vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>

	<script src="vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>

	<script src="vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="vendors/input-mask/input-mask.min.js"></script>

	<script src="js/app.min.js"></script>
</html>