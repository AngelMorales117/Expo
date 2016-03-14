<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
	<title>Eco-Pet</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/products.css">
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
	
</head>

<body>
<body background="">


<!--Barra de navegación-->

  <?php include 'nav.php'; ?>

<!--Encabezado-->
<div class="container imagencita">
	<div class="row">
		<img src="../img/logos/ecopet2.png" alt="" class="img-responsive col-lg-6 col-md-6 col-xs-12 col-sm-12">
		<h3 class="col-lg-6 col-md-6 text-center parrafito">Eco-Pet es nuestra linea de mascotas. Aqui econtraras una gran cantidad de productos que estan diseñados especificamente para los más pequeños y peluditos de la casa. Paletiza tu vida empezando por tus mascotas. Prodcutos ecologico y amigable con el medio ambiente.</h3>
	</div>
</div>

<section>

	<!--Boton de comprar-->
	<div class="container-fluid" id="principalP">
		<div class="row-fluid">
		<div class="col-sm-12 col-md-offset-10 col-md-2 postz" id="barranueva">
				<br><br><ul class="nav nav-pills nav-stacked" id="menuVertical">
					<li class="active item " ><a href="#" class="categoria"><p id="boton1" class="text-center"></p><button type="button" class="btn btn-hola center-block" onClick="getBuy()"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar </button>
					</a></li>
				</ul><br>
				</div>
			</div>


			<!---Navegacion entre categorias-->
			<div class="col-sm-2 col-md-2 postz" id="">
				<ul class="nav nav-pills nav-stacked" id="menuVertical">
					<li class="active item " id="mobos"><a href="#" class="categoria">Todo</a></li>
					<li class="item" id="pros"> <a href="#">Novedades</a></li>
					<li class="item"> <a href="#">Articulos para Perros</a></li>
					<li class="item"> <a href="#">Casas o camas</a></li>
					<li class="item"> <a href="#">Articulos para gatos</a></li>
					
				</ul>
			

				<form class="navbar-form navbar-right" role="search">
					<input type="text" class="form-control" placeholder="Buscar producto...">
				</form>
			</div>
			
				<!--Cuadricula con productos-->
		
			<div class="col-sm-10 col-md-10 cuadricula">
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-3  text-center box">
						<div class="thumbnail">

					      <img class="imgproducto img-responsive"  src="../img/Eco-pet/eco1.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Diseño clasico</h3>
					        <p class="text-center">Diseños contemporaneos usualmente utilizados</p>
					        <button class="btn btn-hola-carrito" ><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola"  data-toggle="modal" data-target="#detalle" >Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/Eco-pet/eco2.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Caricatura design</h3>
					        <p class="text-center">Casas construidas en base a caricaturas.</p>
					        <button class="btn btn-hola-carrito2"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/Eco-pet/eco3.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Linea Basica</h3>
					        <p class="text-center">Sobriedad y buen gusto en una sola inversion.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
						<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/Eco-pet/eco4.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Casas medianas</h3>
					        <p class="text-center">Ideal para mascotas de tamaños promedio.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/Eco-pet/eco5.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Linea Deluxe</h3>
					        <p class="text-center">Diseñada con acabados de lujo y materiales premium.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/Eco-pet/eco6.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Muebles y camas</h3>
						        <p class="text-center">Construida para brindar la maxima comodidad a tu mascota.</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/Eco-pet/eco7.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Casas portatiles</h3>
						        <p class="text-center">Creando un ambiente inigualable en cualquier lugar</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/Eco-pet/eco8.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Casa personalizada</h3>
						        <p class="text-center">Tu idea convertida en realidad con la mayor calidad</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
			</div>
			</div>
		</div>
	</div>
	</section>
	<br>

	<!--footer-->
<?php include 'footer.php'; ?>

<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="../js/vendor/jquery-1.11.2.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/products.js"></script>
<script src="../js/nav.js"></script>
</body>
</html>