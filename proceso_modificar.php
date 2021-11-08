<?php
	#Autor: Stephanie
	#Fecha: Junio 2021
	# Codigo PHP que lleva acabo el proceso de modificacion del formulario situado en modificar.php
	include("db.php");
	$id = $_REQUEST['id'];

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$estadom = $_POST['estadom'];
	$lugar = $_POST['lugar'];
	$hospital = $_POST['hospital'];
	$imagen1 = addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));
	$imagen2 = addslashes(file_get_contents($_FILES['imagen2']['tmp_name'])); 
	$imagen3 = addslashes(file_get_contents($_FILES['imagen3']['tmp_name'])); 

	$query = "UPDATE tabla_imagen SET nombre='$nombre',apellidos='$apellidos', estadom='$estadom', lugar='$lugar', hospital='$hospital', imagen1='$imagen1', imagen2='$imagen2', imagen3='$imagen3' WHERE id = '$id'";

	$resultado = $conexion->query($query);

	if($resultado){
	?>
	<?php
	include("Busqueda_fotografias.php");
	?>
		<script>
			alert("Modificacion exitosa");
		</script>
		<?php	
	}
	
	