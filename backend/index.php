<?php

require("procesos/database.php");
$sql = "SELECT * FROM personal";
$data = Database::getRows($sql, null);
if($data == null)
{
    header("location: registrar.php");
}


require("procesos/validator.php");


if(!empty($_POST))
{
  $_POST = validator::validateForm($_POST);
    $alias = $_POST['alias'];
    $clave = $_POST['clave'];
    try
    {
        if($alias != "" && $clave != "")
      {
        $sql = "SELECT * FROM personal WHERE usuario = ?";
        $param = array($alias);
        $data = Database::getRow($sql, $param);
        if($data != null)
        {
          $hash = $data['clave_personal'];
          if(password_verify($clave, $hash)) 
          {
            session_start();
            $_SESSION['Id_personal'] = $data['Id_personal'];
              $_SESSION['nombrePersonal'] = $data['nombrePersonal']." ".$data['apellidoPersonal'];
              header("location: cargos/cargos.php");
        }
        else 
        {
          throw new Exception("La clave ingresada es incorrecta.");
        }
        }
        else
        {
          throw new Exception("El alias ingresado no existe.");
        }
      }
      else
      {
        throw new Exception("Debe ingresar un alias y una clave.");
      }
    }
    catch (Exception $error)
    {
        print("<div class='card-panel red'><i class='material-icons left'>error</i>".$error->getMessage()."</div>");
    }
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOGIN | CARPINTERIA SV</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/login-backend.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form method="post" class="form-login">
		        <h2 class="form-login-heading">INICIAR SESIÓN</h2>
		        <div class="login-wrap">
		            <input type="text" id="alias" name="alias" class="form-control validate"  placeholder="Usuario" autofocus title="Pon el usuario" required>
		            <br>
		            <input type="password" name="clave" id="clave" class="form-control validate" placeholder="Contraseña" title="Pon la contraseña" required>
		            <label class="checkbox">
                  <a href="registrar.php">Registrarme</a>
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> ¿Olvidaste tu contraseña?</a>

		
		                </span>
		            </label>

		            <button class="btn btn-theme btn-block" type="submit" name="iniciar"><i class="fa fa-lock"></i> ENTRAR</button>
		        </div>


		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/i.png", {speed: 500});
    </script>
   <footer class="footer">
   		<div class="container"> 		
   			<p class="text-muted">La Carpinteria SV | 2016</p>
   		</div>
   </footer>
  </body>
</html>
