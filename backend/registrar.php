<?php
require("procesos/database.php");
$sql = "SELECT * FROM personal";
$data = Database::getRows($sql, null);
if($data != null)
{
    header("location: index.php");
}


require("procesos/validator.php");
date_default_timezone_set('America/Guatemala');

if(!empty($_POST))
{
    $_POST = Validator::validateForm($_POST);
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $alias = $_POST['alias'];
    $fechaIngreso = date("Y/m/d");
    $horaIngreso = date("G:i:s");
    if($correo == "")
    {
        $correo = null;
    }

    try 
    {
        if($nombres != "" && $apellidos != "")
        {
            $clave1 = $_POST['clave1'];
            $clave2 = $_POST['clave2'];
            if($alias != "" && $clave1 != "" && $clave2 != "")
            {
                if($clave1 == $clave2)
                {
                    $clave = password_hash($clave1, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO personal(nombrePersonal, apellidoPersonal,  correo_personal,usuario, clave_personal, Id_cargo, fechaIngreso, horaIngreso) VALUES(?, ?, ?, ?, ?, 1, ?, ?)";
                    $param = array($nombres, $apellidos, $correo, $alias, $clave, $fechaIngreso, $horaIngreso);
                    Database::executeRow($sql, $param);
                    header("location: index.php");
                }
                else
                {
                    throw new Exception("Las claves ingresadas no coinciden.");
                }
            }
            else
            {
                throw new Exception("Debe ingresar todos los datos de autenticación.");
            }
        }
        else
        {
            throw new Exception("Debe ingresar el nombre completo.");
        }
    }
    catch (Exception $error)
    {
        print("<div class='card-panel red'><i class='material-icons left'>error</i>".$error->getMessage()."</div>");
    }
}
else
{
    $nombres = null;
    $apellidos = null;
    $correo = null;
    $alias = null;
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>REGISTRAR | CARPINTERIA SV</title>

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
		        <h2 class="form-login-heading">REGISTRARME</h2>
		        <div class="login-wrap">
		            <input type="text" id="nombres" name="nombres" class="form-control validate"  placeholder="Nombres" autofocus title="Pon tus nombres" length='50' maxlenght='50' required>
		            <br>
                <input type="text" id="apellidos" name="apellidos" class="form-control validate"  placeholder="Apellidos" autofocus title="Pon tus apellidos" length='50' maxlenght='50' required>
                <br>
                <input type="email" id="correo" name="correo" class="form-control validate"  placeholder="Correo" autofocus title="Pon tu correo" length='100' maxlenght='100' required>
                <br>
                <input type="text" id="alias" name="alias" class="form-control validate"  placeholder="Alias" autofocus title="Pon tu alias" length='50' maxlenght='50' required>
                <br>
		            <input type="password" name="clave1" id="clave1" class="form-control validate" placeholder="Contraseña" title="Pon la contraseña" length='25' maxlenght='25' required>
                <br>
                <input type="password" name="clave2" id="clave2" class="form-control validate" placeholder="Confirmar Contraseña" title="Vuelve a escribir la contraseña" length='25' maxlenght='25' required>
		            <label class="checkbox">
                  <a href="registrar.php">Registrarme</a>
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> ¿Olvidaste tu contraseña?</a>

		
		                </span>
		            </label>

		            <button class="btn btn-theme btn-block" type="submit" name="iniciar"><i class="fa fa-lock"></i> REGISTRAR</button>
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
