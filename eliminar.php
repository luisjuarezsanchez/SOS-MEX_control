<?php
/*
#Autor: Luis Jair
#Fecha: Junio 2021
#En esta seccion de codigo se lleva acabo la eliminacion de registros con base al identificador de registro
*/
	include("db.php");
	$id = $_REQUEST['id'];
	$query = "DELETE FROM tabla_imagen WHERE id = '$id'";

	$resultado = $conexion->query($query);
	if($resultado){
	?>
	<?php
	include("Busqueda_fotografias.php");
	?>
		<script>
			alert("Registro eliminado");
		</script>
		<?php
	}
		
	