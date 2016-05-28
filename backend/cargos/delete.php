<?php
require("../pagina.php");
require("../procesos/database.php");
require("../procesos/validator.php");
Page::header("Eliminar cargo");

if(!empty($_GET['id'])) 
{
    $id = $_GET['id'];
}
else
{
    header("location: cargos.php");
}

if(!empty($_POST))
{
	$id = $_POST['id'];
	try 
	{
		$sql = "DELETE FROM cargos WHERE id_cargo = ?";
	    $params = array($id);
	    Database::executeRow($sql, $params);
	    header("location: cargos.php");
	} 
	catch (Exception $error) 
	{
		print("<div class='card-panel red'><i class='material-icons left'>error</i>".$error->getMessage()."</div>");
	}
}
?>
<div class="center-block">
<form method='post' class='row'>
	<input type='hidden' name='id' value='<?php print($id); ?>'/>
	<button type='submit' class='btn btn-danger'><i class='glyphicon glyphicon-remove'></i>Si</button>
	<a href='index.php' class='btn btn-primary'><i class='glyphicon glyphicon-ok'></i>No</a>
</form>
</div>
<?php
Page::footer();
?>