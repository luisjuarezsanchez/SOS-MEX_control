<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Registra un nuevo usuario</title>
	<link rel="stylesheet" href="css/login5.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="icon-eye">SOS-MEX</h1>
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>
			<nav class="menu">
				<a href="index.php">Inicio</a>
				<a target="_blank" href="https://www.facebook.com/Sos-Mex-100416508942788">Facebook</a>
				<a target="_blank" href="https://twitter.com/mex_sos">Twitter</a>
				<a target="_blank" href="https://www.instagram.com/sosxmex/?hl=es-la">Instagram</a>
			</nav>
		</div>
	</header>

		<?php
			include("db.php");
			$id = $_REQUEST['id'];
			$query = "SELECT * FROM tabla_imagen WHERE id ='$id'";
			$resultado = $conexion->query($query);
			$row = $resultado->fetch_assoc();
		?>

	<section class="form-login">
		<center>
		<form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data"> 
		<h5>Llena los datos correspondientes</h5>
		<input class=controls type="text" REQUIRED name="nombre" value="<?php echo $row['nombre'] ?>" placeholder="Ingresa su nombre(s)" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">

		<input class=controls type="text" REQUIRED name="apellidos" value="<?php echo $row['apellidos'] ?>" placeholder="Digita sus apellidos" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">

		<input class=controls type="text" REQUIRED name="estadom" value="<?php echo $row['estadom'] ?>" placeholder="Digita su estado medico" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">
		
		<input class=controls type="text" REQUIRED name="lugar" value="<?php echo $row['lugar'] ?>" placeholder="Digita su lugar de encuentro">
		<input class=controls type="text" REQUIRED name="hospital" value="<?php echo $row['hospital'] ?>" placeholder="Digita el hospital de traslado">
		<h5>Carga las respectivas fotografias </h5>
		<input class=controls type="file" REQUIRED name="imagen1">
		<img height="50" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen1']); ?>"/>
		<input class=controls type="file" REQUIRED name="imagen2">
		<img height="50" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen2']); ?>"/>
		<input class=controls type="file" REQUIRED name="imagen3">
		<img height="50" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen3']); ?>"/>
		<input class="buttons" type="submit" name="b_alta" value="Modificar">
		<input class="buttons" type="reset" name="borrar" value="Vaciar campos">
		<br/>

		</form>
		</center>
	</section>


		<footer>
			<br/>
			<br/>
			<br/>



		<div class="contenedor">
			<p class="copy">SOS-MEX &copy; 2021</p>
			<div class="sociales">
				<a class="icon-facebook" target="_blank" href="https://www.facebook.com/Sos-Mex-100416508942788"></a>
				<a class="icon-twitter-squared" target="_blank" href="https://twitter.com/mex_sos"></a>
				<a class="icon-instagram" target="_blank" href="https://www.instagram.com/sosxmex/?hl=es-la"></a>
			</div>
		</div>
	</footer>

</body>
</html>
