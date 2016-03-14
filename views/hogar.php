<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
	<title>Hogar</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/products.css">
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
	
</head>

<body>


<!--Barra de navegación-->

  <?php include 'nav.php'; ?>
  <!--Encabezado-->
<div class="container imagencita">
	<div class="row">
		<img src="../img/hogar/sofa.jpg" alt="" class="img-responsive img-rounded col-lg-6 col-md-6 col-xs-12 col-sm-12" id="boda">
		<h3 class="col-lg-6 col-md-6 text-center parrafito"><br><br>Paletiza tu casa. Amuebla tu hogar con muebles unicos, mooder, innovadores y sobre todo, amigables con el medio ambiente. Comparte tus momentos en familia en nuestros muebles, descanza en ellos, vive e ellos y sobre todo, disfruta de esos pequeños momentos.</h3>
	</div>
</div>
<br>

<!---Navegacion entre categorias-->
<section>
	<!--Boton de compra-->
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
					<li class="active item " id="mobos"><a href="#" class="categoria">Todos</a></li>
					<li class="item" id="pros"> <a href="#">Recuerdos</a></li>
					<li class="item"> <a href="#">Centros de Mesa</a></li>
					<li class="item"> <a href="#">Exteriores</a></li>
					<li class="item"> <a href="#">Otros</a></li>
					
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

					      <img class="imgproducto img-responsive"  src="../img/hogar/deco1.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Escritorio Clasico</h3>
					        <p class="text-center">Diseños de escritorios usualmente utilizados</p>
					        <button class="btn btn-hola-carrito" ><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola"  data-toggle="modal" data-target="#detalle" >Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/hogar/deco2.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Sala de estar</h3>
					        <p class="text-center">Todo lo necesario para hacer de tu casa un hogar.</p>
					        <button class="btn btn-hola-carrito2"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/hogar/deco3.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Niños</h3>
					        <p class="text-center">Juegueteras , modulos y mas.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
						<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/hogar/deco4.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Juego de comedor</h3>
					        <p class="text-center">Especialmente para tu hogar</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/hogar/deco5.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Habitacion</h3>
					        <p class="text-center">Diseñada con acabados de lujo personalizables.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/hogar/deco6.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Modulos y cocina</h3>
						        <p class="text-center">Brindandole la mayor utilidad a tu cocina.</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/hogar/deco8.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Patio y jardin</h3>
						        <p class="text-center">Creando un ambiente inigualable en sus exteriores</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/hogar/deco7.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Araganes de jardin</h3>
						        <p class="text-center">Descanza y toma el sol en tu jardin comadamente.</p>
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