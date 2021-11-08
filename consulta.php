<?php
	/*
		Autor: Stephanie Santana
		Fecha 08/11/21
		Desc: Se realiza la configuración a la bd
			  Se optiene el nombre y el apellido del formulario y se realiza su búsqueda 
			  en la tabla correspondiente para mostrarla al usuario segun sea su nivel de
			  coincidencia
	*/
	include("db.php");
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];

	$query = "SELECT * FROM tabla_imagen WHERE nombre='nombre'";

	$resultado = $conexion->query($query);
	/*
		Autor: Stephanie Santana
		Fecha 08/11/21
		Desc: Muestra la página -> busqueda_apellido.php segun el nivel de coincidencia
	*/

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
		
	