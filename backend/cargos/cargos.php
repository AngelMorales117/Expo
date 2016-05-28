<?php
require("../pagina.php");
require("../procesos/database.php");
Page::header("Cargos");
?>
<!-- Estructura del formulario -->
<?php
if(!empty($_POST))
{
	$search = trim($_POST['buscar']);
	$sql = "SELECT * FROM categorias WHERE nombre_categoria LIKE ? ORDER BY nombre_categoria";
	$params = array("%$search%");
}
else
{
	$sql = "SELECT * FROM categorias ORDER BY nombre_categoria";
	$params = null;
}
$data = Database::getRows($sql, $params);
if($data != null)
{
	$tabla = 	"<table class='centered striped'>
					<thead>
			    		<tr>
				    		<th>Cargo</th>
			    		</tr>
		    		</thead>
		    		<tbody>";
		foreach($data as $row)
		{
	        $tabla .=	"<tr>
	            			<td>$row[cargo]</td>
	            			<td>
	            				<a href='save.php?id=$row[id_cargo]' class='btn btn-primary'><i class=''>edit</i></a>
								<a href='delete.php?id=$row[id_cargo]' class='btn btn-primary'><i class=''>delete</i></a>
							</td>
	        			</tr>";
		}
		$tabla .= 	"</tbody>
    			</table>";
	print($tabla);
}
else
{
	print("<div class='c'><i class=''>warning</i>No hay registros.</div>");
}
Page::footer();
?>