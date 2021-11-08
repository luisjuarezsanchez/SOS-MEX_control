<?php
	/*Autor: Stephanie Santana
	Fecha 24/07/21
	Desc: Realizar la conexión a la bd usando "db.php" y 
	obter el id que se eliminara (proporcionado por el 
	usuario princial)*/
	include("db.php");
	$id = $_REQUEST['id'];

	/*Autor: Stephanie Santana
	Fecha 24/07/21
	Desc: Linea a SQL para eliminar registro*/
	$query = "DELETE FROM tabla_imagen WHERE id = '$id'";

	$resultado = $conexion->query($query);
		/*Autor: Stephanie Santana
	Fecha 24/07/21
	Desc: Se actualiza y se muestra una ventaa emergente 
	para que el usuario vea que la acción se realizo*/
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
		
	