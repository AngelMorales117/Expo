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
   
  
  <section class="seccion vcenter"><br>
    <div class="container-fluid logincontent inicio">    
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="thumbnail card">
          <img src="../img/logos/laca1.png" alt="img-rude">
          <div class="caption">
            <h3 class="text-center">Tu cuenta</h3>
            <p class="text-center">Inicia sesión para poder contar con todos los servicios que te ofrecemos.</p>
          </div>
        </div>
      </div>
      <div id="loginbox" class="col-xs-12  col-md-6 col-md-offset-3">
        <div class="row">
         <h2 id="title" class="color-white text-center">Iniciar Sesion</h2>
       </div>
       <div class="panel-body" >
        <form id="loginform" class="form-horizontal" role="form">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="correo electronico">
          </div>

          <div  class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña">
          </div>      
          <div class="input-group">
            <div class="checkbox">
              <label>
               <input id="login-remember" type="checkbox" name="remember" value="1"> Recordar Contraseña
             </label>
           </div>
         </div>
         <div  class="form-group">
           <div class="col-sm-12 col-xs-12 controls"><br>
            <button class="col-sm-12 btn btn-hola center-block">Iniciar Sesión</button>
            <br>
            <br>
            <div class="col-sm-12 controls">
                  <a class=" col-sm-5 btn  btn-social btn-facebook center-block text-center">
                      <span class="fa fa-facebook text-center"></span> Iniciar con facebook
                    </a>
                    <div class="col-sm-2"></div>
                    <a class="col-xs-12  col-sm-5 btn  btn-social btn-google text-center ">
                      <span class="fa fa-google text-center"></span> Iniciar con google
                    </a>
                </div>
            <div class="col-sm-12">
              
            </div>
          </div>
        </div>
      </form>
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