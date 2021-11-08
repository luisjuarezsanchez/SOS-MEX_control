<?php

	/*
		Autor: Stephanie Santana
		Fecha 12/10/21
		Desc: Se hace conexión a la bd 
			  Se obtienen los datos ingresados en el formulario 
	*/
	include("db.php");
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$estadom = $_POST['estadom'];
	$lugar = $_POST['lugar'];
	$hospital = $_POST['hospital'];
	$imagen1 = addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));
	$imagen2 = addslashes(file_get_contents($_FILES['imagen2']['tmp_name'])); 
	$imagen3 = addslashes(file_get_contents($_FILES['imagen3']['tmp_name'])); 

	/*
		Autor: Stephanie Santana
		Fecha 12/10/21
		Desc: Código en SQL para agregar el registro 
	*/
	$query = "INSERT INTO tabla_imagen (nombre,apellidos,estadom,lugar,hospital,imagen1,imagen2,imagen3) VALUES('$nombre','$apellidos','$estadom','$lugar','$hospital','$imagen1','$imagen2','$imagen3')";

	$resultado = $conexion->query($query);

	if($resultado){
	?>
	<?php
	include("Registro.php");
	?>
		<script>
			/*
		Autor: Stephanie Santana
		Fecha 12/10/21
		Desc: Se muestra una ventana emergente del exito del registro
	*/
			alert("Registro exitoso");
		</script>
	}else{
	<?php	
	}