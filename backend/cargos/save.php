<?php
require("../lib/page.php");
require("../../lib/database.php");
require("../../lib/validator.php");

if(empty($_GET['id'])) 
{
    Page::header("Agregar categoría");
    $id = null;
    $nombre = null;
    $descripcion = null;
}
else
{
    Page::header("Modificar categoría");
    $id = $_GET['id'];
    $sql = "SELECT * FROM categorias WHERE id_categoria = ?";
    $params = array($id);
    $data = Database::getRow($sql, $params);
    $nombre = $data['nombre_categoria'];
    $descripcion = $data['descripcion_categoria'];
}

if(!empty($_POST))
{
    $_POST = Validator::validateForm($_POST);
  	$nombre = $_POST['nombre'];
  	$descripcion = $_POST['descripcion'];
    if($descripcion == "")
    {
        $descripcion = null;
    }

    try 
    {
      	if($nombre == "")
        {
            throw new Exception("Datos incompletos.");
        }

        if($id == null)
        {
        	$sql = "INSERT INTO categorias(nombre_categoria, descripcion_categoria) VALUES(?, ?)";
            $params = array($nombre, $descripcion);
        }
        else
        {
            $sql = "UPDATE categorias SET nombre_categoria = ?, descripcion_categoria = ? WHERE id_categoria = ?";
            $params = array($nombre, $descripcion, $id);
        }
        Database::executeRow($sql, $params);
        header("location: index.php");
    }
    catch (Exception $error)
    {
        print("<div class='card-panel red'><i class='material-icons left'>error</i>".$error->getMessage()."</div>");
    }
}
?>
<form method='post' class='row' enctype='multipart/form-data'>
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>add</i>
          	<input id='nombre' type='text' name='nombre' class='validate' length='50' maxlenght='50' value='<?php print($nombre); ?>' required/>
          	<label for='nombre'>Nombre</label>
        </div>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>description</i>
          	<input id='descripcion' type='text' name='descripcion' class='validate' length='200' maxlenght='200' value='<?php print($descripcion); ?>'/>
          	<label for='descripcion'>Descripción</label>
        </div>
    </div>
    <a href='index.php' class='btn grey'><i class='material-icons right'>cancel</i>Cancelar</a>
 	<button type='submit' class='btn blue'><i class='material-icons right'>check_circle</i>Guardar</button>
</form>
<?php
Page::footer();
?>