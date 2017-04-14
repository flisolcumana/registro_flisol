<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos al Flisol Cumaná 2017</title>
	<link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
	<link href="vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet">
	<link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
	<link href="vendors/materialIcons/css/materialdesignicons.css" rel="stylesheet">
	<link href="vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
	<link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"> 

	<!-- CSS -->
	<link href="css/app_1.css" rel="stylesheet">
	<link href="css/app_2.css" rel="stylesheet">
</head>
<body>
	<header id="header" class="clearfix bgm-green" data-ma-theme="blue">
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
			<!-- <li class="pull-right">
				<ul class="hi-menu">
					<li>
						<a data-toggle="modal" href="#modalInfo" data-original-title="Información del evento" data-placement="bottom" id="infoEvento">
							<i class="him-icon zmdi zmdi-chart"></i>
						</a>
					</li>
				</ul>
			</li> -->
		</ul>
		<div class="h-search-wrap">
			<div class="hsw-inner">
				<i class="hsw-close zmdi zmdi-search c-red" data-ma-action="search-close"></i>
				<input type="text" placeholder="Introduzca el código de la planilla" autocomplete="off">
			</div>
		</div>
	</header>

	<section id="main">
		<div class="row">
			<div class="col-xs-8 center-block" style="float:none;">
				<div class="container">
					<div class="card">
						<div class="card-body">
							<div class="form-wizard-basic fw-container">
								<ul class="tab-nav tn-justified text-center">
									<li><a href="#tab1" data-toggle="tab">Datos Personales</a></li>
									<li><a href="#tab2" data-toggle="tab">Datos del Evento</a></li>
									<li><a href="#tab3" data-toggle="tab">Finalizar</a></li>
								</ul>

								<div class="tab-content p-20">
									<div class="tab-pane fade" id="tab1">
										<div class="row">
											<div class="col-xs-3">
												<div class="form-group">
													<label for="s-documento">Tipo de documento</label>
													<select name="" id="s-documento" class="selectpicker">
														<option class="text-uppercase" value="1">Cédula</option>
														<option class="text-uppercase" value="2">Pasaporte</option>
														<option class="text-uppercase" value="3">Extrangero</option>
													</select>
												</div>
											</div>
											<div class="col-xs-3">
												<div class="form-group">
													<label for="i-cedula">Número</label>
													<div class="input-group">
														<div class="fg-line">
															<input type="text" class="form-control" id="i-cedula" autocomplete="off">
														</div>
														<span class="input-group-addon">
															<button class="btn btn-danger waves-effect"><i class="zmdi zmdi-search"></i></button>
														</span>
													</div>
												</div>
											</div>
											<div class="col-xs-6">
												<div class="form-group">
													<label for="" class="m-b-15">Sexo</label><br>
													<label class="radio radio-inline m-r-20">
														<input name="r-sexo" value="m" type="radio" checked>
														<i class="input-helper"></i> Masculino
													</label>
													<label class="radio radio-inline m-r-20">
														<input name="r-sexo" value="f" type="radio">
														<i class="input-helper"></i> Femenino
													</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6">
												<div class="form-group fg-line">
													<label for="i-nombres">Nombres</label>
													<input type="text" class="form-control" id="i-nombres" autocomplete="off">
												</div>
											</div>
											<div class="col-xs-6">
												<div class="form-group fg-line">
													<label for="i-apellidos">Apellidos</label>
													<input type="text" class="form-control" id="i-apellidos" autocomplete="off">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group fg-line">
													<label for="i-correo">Correo</label>
													<input type="text" class="form-control" id="i-correo" autocomplete="off">
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab2">
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label for="" class="m-b-15">Tipo de asistencia</label><br>
													<label class="checkbox checkbox-inline m-r-20">
														<input value="1" type="checkbox" checked>
														<i class="input-helper"></i> Asistente
													</label>
													<label class="checkbox checkbox-inline m-r-20">
														<input value="2" type="checkbox">
														<i class="input-helper"></i> Instalación
													</label>
													<label class="checkbox checkbox-inline m-r-20">
														<input value="3" type="checkbox">
														<i class="input-helper"></i> Actualización
													</label>
													<label class="checkbox checkbox-inline m-r-20">
														<input value="4" type="checkbox">
														<i class="input-helper"></i> Cambio de sistema
													</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label for="" class="m-b-15">Tipo de asistente</label><br>
													<label class="radio radio-inline m-r-20">
														<input name="r-asistente" value="1" type="radio" checked>
														<i class="input-helper"></i> Comunidad
													</label>
													<label class="radio radio-inline m-r-20">
														<input name="r-asistente" value="2" type="radio">
														<i class="input-helper"></i> Estudiante
													</label>
													<label class="radio radio-inline m-r-20">
														<input name="r-asistente" value="3" type="radio">
														<i class="input-helper"></i> Funcionario público
													</label>
													<label class="radio radio-inline m-r-20">
														<input name="r-asistente" value="4" type="radio">
														<i class="input-helper"></i> Funcionario privado
													</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group fg-line">
													<label for="i-entidad">Comunidad / Entidad que representa</label>
													<input type="text" class="form-control" id="i-entidad" autocomplete="on" placeholder="Urbanización / Escuela / Liceo / Universidad / Empresa">
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab3">
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label for="" class="m-b-15">Nivel de conocimiento</label><br>
													<label class="radio radio-inline m-r-20">
														<input name="r-nc" value="1" type="radio" checked>
														<i class="input-helper"></i> Ninguno
													</label>
													<label class="radio radio-inline m-r-20">
														<input name="r-nc" value="2" type="radio">
														<i class="input-helper"></i> Básico
													</label>
													<label class="radio radio-inline m-r-20">
														<input name="r-nc" value="3" type="radio">
														<i class="input-helper"></i> Medio
													</label>
													<label class="radio radio-inline m-r-20">
														<input name="r-nc" value="4" type="radio">
														<i class="input-helper"></i> Avanzado
													</label>
												</div>
											</div>
										</div>
										<div class="col-xs-12 text-right">
											<div class="form-group">
												<button class="btn btn-lg btn-success" id="btn-registrar">Registrar</button>
											</div>
										</div>
									</div>

									<ul class="fw-footer pagination wizard">
										<!-- <li class="previous first">
											<a class="a-prevent" href=""><i class="zmdi zmdi-more-horiz"></i></a>
										</li> -->
										<li class="previous">
											<a class="a-prevent" id="previous" href=""><i class="zmdi zmdi-chevron-left"></i></a>
										</li>
										<li class="next">
											<a class="a-prevent" id="next" href=""><i class="zmdi zmdi-chevron-right"></i></a>
										</li>
										<!-- <li class="next last">
											<a class="a-prevent" href=""><i class="zmdi zmdi-more-horiz"></i></a>
										</li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
	<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

	<script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
	<script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
	<script src="vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>


	<script src="vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="vendors/input-mask/input-mask.min.js"></script>
	<script src="vendors/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

	<script src="js/app.min.js"></script>
</html>

<script>
	$(function () {
		$('#infoEvento').hover(function() {
			$(this).tooltip('show');
		});
	});

	$('#btn-registrar').click(function() {
		$.ajax({
			url: 'crud/crud.php',
			type: 'POST',
			dataType: 'json',
			data: {
				param1: 'value1',
				succsess:function (v) {
					if (v.mensaje == null) {
						alert('nulo');
					}
				}
			}
		});
	});
</script>