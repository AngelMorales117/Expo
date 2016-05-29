<?php
require("../pagina.php");
require("../procesos/database.php");
Page::header('Cargos');
?>
<form method='post' class='row'>
	<div class="row">
  	<div class='col-md-1 unespacio'>
		<a href='save.php' class='btn btn-success'><i class='glyphicon glyphicon-plus'></i>Nuevo</a>
  	</div>
  	</div><br>
  	<div class="col-md-12">
	<div class=' col-md-2'>
      	<i class='glyphicon glyphicon-search'></i>
      	<input id='buscar' type='text' name='buscar' class='validate'/>
      	<label for='buscar'>Búsqueda</label>
    </div><br>
    <div class='col-md-offset-3'>
    	<button type='submit' class='btn btn-primary'><i class='glyphicon glyphicon-ok'></i>Aceptar</button> 	
  	</div></div>
</form>
<?php
if(!empty($_POST))
{
	$search = trim($_POST['buscar']);
	$sql = "SELECT * FROM cargos WHERE cargos LIKE ? ORDER BY cargos";
	$params = array("%$search%");
}
else
{
	$sql = "SELECT * FROM cargos ORDER BY cargos";
	$params = null;
}
$data = Database::getRows($sql, $params);
if($data != null)
{
	$tabla = 	"
	<div class='container-fluid'>
	<table class='col-md-6 table-striped'>
					<thead>
			    		<tr>
				    		<th>Cargos</th>
			    		</tr>
		    		</thead>
		    		<tbody>";
		foreach($data as $row)
		{
	        $tabla .=	"<tr>
	            			<td class='tabla'>$row[cargos]</td>
	            			<td class='tabla'>
	            				<a href='save.php?id=$row[Id_cargo]' class='btn btn-primary'><i class=''>edit</i></a>
								<a href='delete.php?id=$row[Id_cargo]' class='btn btn-danger'><i class=''>delete</i></a>
							</td>
	        			</tr>";
		}
		$tabla .= 	"</tbody>
    			</table>
    			</div>";
	print($tabla);
}
else
{
	print("<div class='c'><i class=''>warning</i>No hay registros.</div>");
}
Page::footer();
?>