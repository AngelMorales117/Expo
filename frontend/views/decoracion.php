<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
	<title>Decoración</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
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
		<img src="../img/Decoracion/ejemplod.jpg" alt="" class="img-responsive img-rounded col-lg-6 col-md-6 col-xs-12 col-sm-12" id="boda">
		<h3 class="col-lg-6 col-md-6 text-center parrafito"><br><br>Decora las paredes y mesas vacias de tu casa. Rellena esos rincones planos y aburridos con alguno de nuestros ornamentos y productos que le daran una nueva vida al lugar donde lo coloques.</h3>
	</div>
</div>
<br>

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
					<li class="item" id="pros"> <a href="#">Pared</a></li>
					<li class="item"> <a href="#">Festividades</a></li>
					<li class="item"> <a href="#">Mesa</a></li>
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

					      <img class="imgproducto img-responsive"  src="../img/decoracion/decor1.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Corazón de pared</h3>
					        <p class="text-center">Diferentes diseños decorativos con grabado personalizado</p>
					        <button class="btn btn-hola-carrito" ><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola"  data-toggle="modal" data-target="#detalle" >Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/decoracion/decor2.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Motivos Navideños</h3>
					        <p class="text-center">Tipo stylo de 4 a 6 piezas para decoracion.</p>
					        <button class="btn btn-hola-carrito2"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/decoracion/decor3.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Cartel "Chocolate"</h3>
					        <p class="text-center">Diseña y convierte tus ideas en proyectos fisicos.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
						<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/decoracion/decor4.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Letras decorativas</h3>
					        <p class="text-center">Obten todo lo que necesitas para recbir a tus invitados.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/decoracion/decor5.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Come, bebe y ama</h3>
					        <p class="text-center">Un detalle para esa persona especial</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/decoracion/decor6.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Letreros grabados</h3>
						        <p class="text-center">Señalizaciones decorativas para esa ocasion especial.</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/decoracion/decor7.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Letrero Love</h3>
						        <p class="text-center">Todo lo necesario para crear un ambiente inolvidable</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/decoracion/decor8.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Cartel Beso</h3>
						        <p class="text-center">Tu idea con la mayor calidad  y innovación nacional.</p>
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