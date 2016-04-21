<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrate</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/register.css">
	<link rel="stylesheet" href="../css/font-awesomeq.css">
    <link href="../css/bootstrap-social.css" rel="stylesheet">
    <link href="../css/docs.css" rel="stylesheet" >
    <link href="../css/main.css" rel="stylesheet" >
    <link href="../css/nav.css" rel="stylesheet" >
</head>
<body>
	

	<?php include 'nav.php' ?>


	<!-- Sección donde se encuentra el contenido de la pagina -->

	<br><br>
	<section class="inicio seccion">
		<div class="container-fluid">
			<div class="row">
			<br>
			<div class="col-xs-12 col-md-6 col-md-offset-6 col-lg-4 col-lg-offset-1">
					<div class="thumbnail card">
						<img src="../img/logos/laca1.png" alt="" class="img-responsive registrar">
						<div class="caption">
							<h3 class="text-center">Tu cuenta</h3>
							<p class="text-center">¡Sé parte de nuestra página para enterarte de nuestras novedades!</p>
						</div>
					</div>
				</div>
				<div id="loginbox" class="col-xs-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-0">
					<h2 id="title" class=" text-center">Registrarme</h2>
					<form id="loginform" role="form">

						<form role="form">
							<div class="form-group">
								<label for=" name"><p class="color-white">Nombres</p></label>
								<input type="text" class="form-control" id="name" placeholder="Ingrese sus nombres">
							</div>
							<div class="form-group">
								<label for=" lname"><p class="color-white">Apellidos</p></label>
								<input type="text" class="form-control" id="lname" placeholder="Ingrese sus apellidos">
							</div>
							<div class="form-group">
								<label for=" email"><p class="color-white">Correo electrónico</p></label>
								<input type="email" class="form-control" id="email" placeholder="correo electronico">
							</div>
							<div class="form-group">
								<label for=" pwd"><p class="color-white">Contraseña</p></label>
								<input type="password" class="form-control" id="pwd" placeholder="Escriba una contraseña">
							</div>
							<div class="checkbox">
								<label><input type="checkbox"><p class="color-white">¡Sé el primero en conocer las mejores ofertas!</p></label>
							</div>
							<div  class="form-group">
								<div class="col-sm-12 controls">
									<button class="btn col-sm-12 btn-hola center-block">Registrame</button>
								</div>
								<br>
								<br>
								<div class="col-sm-12 controls">
									<a class=" col-sm-5 btn  btn-social btn-facebook center-block ">
    									<span class="fa fa-facebook"></span> Registrarme con facebook
  									</a>
  									<div class="col-sm-2"></div>
  									<a class="col-xs-12  col-sm-5 btn  btn-social btn-google center ">
    									<span class="fa fa-google"></span> Registrarme con google
  									</a>
								</div>
								<br>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<br>

		<!--Footer -->
		<?php include 'footer.php'; ?>
	
<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="../js/vendor/jquery-1.11.2.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/nav.js"></script>
	</body>
	</html>