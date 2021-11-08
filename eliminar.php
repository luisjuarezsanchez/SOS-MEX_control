<?php

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
		
	