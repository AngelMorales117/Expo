<!DOCTYPE html>
<html lang="es" class="full">
<head>
  <meta charset="UTF-8">
  <title>La Carpinteria SV</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!---Navbar-->
   <nav class="navbar navbar-fixed-top topedegama">
          <div class="container-fluid">
            <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--Marca del nav -->
              <a href="#" class="navbar-brand"><img src="img/logos/logo1.png" class="img-responsive marca" alt="Responsive image"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Home</a></li>
                 <!-- dropdown de productos -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="views/ecopet.php">Eco-Pet</a></li>
                    <li><a href="views/hogar.php">Hogar</a></li>
                    <li><a href="#">Oficinas</a></li>
                    <li><a href="views/bodas.php">Bodas</a></li>
                    <li><a href="views/decoracion.php">Decoración</a></li>
                  </ul>
                </li>

                <!-- dropdown de blog -->
                <li><a href="views/blog.php" role="button">Blog</a>
                </li>
                
                <!--Dropdown de quienes somos -->
                <li >
                  <a href="views/quienes.php" role="button">Quienes Somos</a>
                </li>

                <!-- dropdown de blog -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contactanos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#help">Formulario de Contacto</a></li>
                    <li><a href="views/ask.php">Preguntas Frecuentes</a></li>
                  </ul>
                </li>
                                 
                <li><a href="views/login.php">Iniciar Sesión</a></li>
                <li><a href="views/register.php">Registrate</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <!--Modales-->

        <!--Modal contactos-->
<div class="modal fade" id="help">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" aria-hideden="true" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-center">¿Cómo podemos ayudarle?</h2>
      </div>
      <div class="modal-body">
        
        <img class="img-responsive" src="img/logos/logo1.png" alt="img-rude">
        
        <h3 class="text-center">Estamos encantados en ayudarte</h3>
        <!-- formulario de ingreso de duda-->
        <form role="form">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Ingrese sus nombres">
          </div>

          <div class="form-group">
            <label for="pwd">Comentanos tu duda</label>
            <textarea class="form-control" id="pwd" rows="7" name="comment" placeholder="Te responderemos lo mas antes posible" >
            </textarea>
          </div>

        </form>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-hola" value="Iniciar seccion para enviar">
        <buttton class="btn btn-default" data-dismiss="modal">Cancelar</buttton>
      </div>
    </div>
  </div>
</div>

<div class="animated zoomIn">
    <!--Encabezado-->
    <div class="container-fluid inicio ">
      <div class="row">
      <!--Imagen del Encabezado-->
        <img src="img/logos/logo2.png" alt="" class="img-responsive col-xs-12 col-sm-4 col-md-4">
        <div class="col-lg-12 col-sm-7 col-md-4 col-lg-4"><br><br class="hidden-xs hidden-sm hidden-md"><br class="hidden-xs hidden-sm hidden-md"><br class="hidden-xs hidden-sm">

        <!--Parrafo del encabezado-->
          <h3 class="text-center">La LCSV-Eco Design es una empresa dedicada al diseño y ambientación de interiores con mobiliario y accesorios decorativos para hogares, oficinas y diferentes tipos de negocios; a partir de una propuesta sostenible como lo es el reciclaje de palets y otros materiales.</h3>
        </div>

        <!--Slider de la parte del encabezado-->
        <div class="carousel slide carousel-fade container inicio  hidden-xs hidden-sm col-lg-3 col-md-3" id="carouselHacked" data-ride="carousel">
          
          <div class="carousel-inner" role="listbox">
            <div class="item active">
            <img src="img/hogar/sofa.png" alt="Imagen1">
                <div class="carousel-caption">
                <p>Muebles unicos para tu jardin y hogar.</p>
                </div>
            </div>
            <div class="item">
            <img src="img/decoracion/Libreria.png" alt="Imagen2">
            <div class="carousel-caption">
                <p>Decora tus paredes vacias y planas.</p>
                </div>
            </div>
            <div class="item">
            <div class="carousel-caption">
                <p>Emprendimiento nacional.</p>
                </div>
            <img src="img/logos/laca1.png" alt="Imagen3">
            </div>
        </div>

        <!-- Controles izquierda y derecha -->
        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        </div>


      </div>
    </div>  

    <!-- seccion -->
    <section class="seccion">
    <!--Productos-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2 class="text-center">¿Qué te ofrecemos?</h2><br>
          </div>
            <div class="col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-4">
              <br><img src="img/bodas/boda3.jpg" alt="" class="img-responsive hommie">
              <h4 class="text-center">Bodas</h4>
              <p class="text-center">La mejor decoración especial para tus eventos especiales y de tu familia.</p><br class="hidden-sm hidden-md hidden-lg">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
              <br><img src="img/hogar/sofa.jpg" alt="" class="img-responsive hommie">
              <h4 class="text-center">Hogar</h4>
              <p class="text-center">Paletiza esos rincones vacios que tienes en tu hogar con muebles unicos.</p>
              <br class="hidden-sm hidden-md hidden-lg">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
              <br><img src="img/oficina/escritorio.jpg" alt="" class="img-responsive hommie">
              <h4 class="text-center">Oficina</h4>
              <p class="text-center">Amuebla tu oficina con un diseño moderno, innvodor y comodo para tu día a día.</p><br class="hidden-sm hidden-md hidden-lg">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-offset-1 col-md-offset-0 col-lg-offset-0  col-sm-4">
              <br><img src="img/eco-Pet/ejemplo.jpg" alt="" class="img-responsive hommie">
              <h4 class="text-center">Eco-Pet</h4>
              <p class="text-center">Conciente a tu mascotas con productos para ellos y amigables al medio ambiente</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-offset-2 col-md-offset-0 col-lg-offset-0 col-sm-4">
              <br><img src="img/decoracion/ejemplod.jpg" alt="" class="img-responsive hommie">
              <h4 class="text-center">Decoración</h4>
              <p class="text-center">Los mejores elementos para decorar ecologicamente tus inmuebles.</p>
            </div>
        </div>
      </div><br><br>
      <div class="container-fluid botoncito">
        <div class="row">
          <div class="col-lg-offset-3 col-lg-3 col-md-offset-3 col-md-3 col-xs-6"><br>
            <h5 class="text-center">¿Tienes ideas en tu cabeza que quieras hacer realidad? Nosotros te ayudamos a darle vida a tus ideas con calidad y valores que nos identifican. Aquí puedes cotizar tus proyectos.</h5>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-6"><br>
            <button class="btn btn-hola col-lg-12 col-md-12 col-xs-12 col-sm-12 holiwis"><a href="views/cotiza.php">Cotiza</a></button>
          </div>
        </div>
        <br>
      </div>
    </section>
    </div>

    <!--footer-->
  <br>
  <div class="container-fluid footerito">
     <!--Soporte tecnico -->
     <div class="col-xs-6 col-md-4"><a class="afoot" href="ask.php">Preguntas Frecuentes</a></div>
     <!--Redes Sociales y correo-->
     <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="https://www.facebook.com/">Facebook</a></div>
     <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="https://www.twitter.com/">Twitter</a></div>
     <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="https://www.instagram.com/">Instagram</a></div>
     <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="">Llamanos al 6011 1363</a></div>
     <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="" data-toggle="modal" data-target="#terminos">Terminos de uso</a></div>
     <div class="navbar-text pull-left col-xs-12">
      <!--Derechos-->
      <p>© 2016 La Carpinteria SV</p>
    </div>
  </div>



  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/nav.js"></script>
</body>
</html>