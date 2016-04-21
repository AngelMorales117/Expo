  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>Inicia Sesión</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/register.css">
  <link rel="stylesheet" href="../css/font-awesomeq.css">
    <link href="../css/bootstrap-social.css" rel="stylesheet">
    <link href="../css/docs.css" rel="stylesheet" >
    <link href="../css/main.css" rel="stylesheet" >
    <link href="../css/nav.css" rel="stylesheet" >
  </head>
  <body>


  <!--Barra de navegación-->
  <?php include 'nav.php'; ?>
  <?php include 'contac.php'; ?>
  <!--Cuerpo de Login -->
   
  
  <section class="seccion vcenter">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
        <img src="../img/logos/laca1.png" alt="" class="img-responsive img-rounded">
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h2 class="text-center">Inicio de Sesión</h2>
        <br>
        <div class="form-group">
                <label for=" email"><p class="color-white">Correo electrónico</p></label>
                <input type="email" class="form-control" id="email" placeholder="correo electronico">
        </div>
        <div class="form-group">
                <label for=" pwd"><p class="color-white">Contraseña</p></label>
                <input type="password" class="form-control" id="pwd" placeholder="Escriba una contraseña">
        </div>

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

      </div>
    </div>
  </div> 
  </section>
<br>
<?php include 'footer.php'; ?>
<!--footer-->


<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="../js/vendor/jquery-1.11.2.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/nav.js"></script>
</body>
</html>