<?php
require("../pagina.php");
require("../procesos/database.php");
require("../procesos/validator.php");

if(empty($_GET['id'])) 
{
    Page::header("Agregar cargo");
    $id = null;
    $nombre = null;
    $descripcion = null;
}
else
{
    Page::header("Modificar categoría");
    $id = $_GET['id'];
    $sql = "SELECT * FROM cargos WHERE id_cargo = ?";
    $params = array($id);
    $data = Database::getRow($sql, $params);
    $nombre = $data['cargos'];
}

if(!empty($_POST))
{
    $_POST = Validator::validateForm($_POST);
  	$nombre = $_POST['nombre'];
    try 
    {
      	if($nombre == "")
        {
            throw new Exception("Datos incompletos.");
        }

        if($id == null)
        {
        	$sql = "INSERT INTO cargos(cargos) VALUES(?)";
            $params = array($nombre);
        }
        else
        {
            $sql = "UPDATE cargos SET cargos = ? WHERE Id_cargo = ?";
            $params = array($nombre, $id);
        }
        Database::executeRow($sql, $params);
        header("location: cargos.php");
    }
    catch (Exception $error)
    {
        print("<div class='container-fluid titulo'> <h3> ERROR </h3> </div>".$error->getMessage()."</div>");
    }
}
?>
<div class="container-fluid">
<form method='post' class='row' enctype='multipart/form-data'>
    <div class='row'>
        <div class='col-md-6'>
          	<i class='glyphicon glyphicon-pencil'></i>
          	<input id='nombre' type='text' name='nombre' class='validate' length='50' maxlenght='50' value='<?php print($nombre); ?>' required/>
          	<label for='nombre'>Nombre</label>
        </div>
    </div>
    <div class="btnforms">
    <a href='cargos.php' class='btn btn-danger'><i class='glyphicon glyphicon-remove'></i>Cancelar</a>
 	<button type='submit' class='btn btn-primary'><i class='glyphicon glyphicon-ok'></i>Guardar</button>
    </div>
</form>
</div>
<?php
Page::footer();
?>