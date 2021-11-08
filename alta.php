<?php

	include("db.php");
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$estadom = $_POST['estadom'];
	$lugar = $_POST['lugar'];
	$hospital = $_POST['hospital'];
	$imagen1 = addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));
	$imagen2 = addslashes(file_get_contents($_FILES['imagen2']['tmp_name'])); 
	$imagen3 = addslashes(file_get_contents($_FILES['imagen3']['tmp_name'])); 

	$query = "INSERT INTO tabla_imagen (nombre,apellidos,estadom,lugar,hospital,imagen1,imagen2,imagen3) VALUES('$nombre','$apellidos','$estadom','$lugar','$hospital','$imagen1','$imagen2','$imagen3')";

	$resultado = $conexion->query($query);

	if($resultado){
	?>
	<?php
	include("Registro.php");
	?>
		<script>
			alert("Registro exitoso");
		</script>
	}else{
	<?php	
	}