<?php
	/*
		Autor: Stephanie Santana
		Fecha 12/10/21
		Desc: Se hace conexión a la bd 
			  Se identifica el id en el qual se realizan las modificaciones
			  Se traen los dato de la interfaz modificar.php -> se volveran a 
			  subir todos los datos e imagenes 
	*/
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

	/*
		Autor: Stephanie Santana
		Fecha 12/10/21
		Desc: Actualiza los datos de BD y la interfaz
		Muestra una ventana de la acción exitos del usuario
	*/
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
	
	