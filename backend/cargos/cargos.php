<?php
require("../pagina.php");
require("../procesos/database.php");
Page::header('Cargos');
?>
<!-- Estructura del formulario -->
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