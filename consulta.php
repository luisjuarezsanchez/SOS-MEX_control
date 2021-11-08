<?php

	include("db.php");
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];

	$query = "SELECT * FROM tabla_imagen WHERE nombre='nombre'";

	$resultado = $conexion->query($query);

	if($resultado){
	?>
	<?php
	include("busqueda_apellido.php");
	?>
		<script>
			alert("Resultados que coinciden");
		</script>
	<?php	
	}
		
	