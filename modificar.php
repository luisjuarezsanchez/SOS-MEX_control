<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Registra un nuevo usuario</title>
	<!-- 
		Autor: Stephanie Santana
		Fecha 12/10/21
		Desc: Estilos a utilizar en la interfaz
	-->
	<link rel="stylesheet" href="css/login5.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<!-- 
				Autor: Stephanie Santana
				Fecha 12/10/21
				Desc: Barra de menú con logo 
			-->
			<h1 class="icon-eye">SOS-MEX</h1>
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>
			<nav class="menu">
				<!-- 
					Autor: Stephanie Santana
					Fecha 12/10/21
					Desc: Menu despleable de 3 barras horizontales con hipervinculos
				 -->
				<a href="index.php">Inicio</a>
				<a target="_blank" href="https://www.facebook.com/Sos-Mex-100416508942788">Facebook</a>
				<a target="_blank" href="https://twitter.com/mex_sos">Twitter</a>
				<a target="_blank" href="https://www.instagram.com/sosxmex/?hl=es-la">Instagram</a>
			</nav>
		</div>
	</header>

		<?php
			/*
				Autor: Stephanie Santana
				Fecha: 12/10/21
				Desc: Realizar conxión a la bd -> db.php
					  Obtener el id del registro sellecionado
					  Buscar el id en la tabla por sentencia SQL
			*/
			include("db.php");
			$id = $_REQUEST['id'];
			$query = "SELECT * FROM tabla_imagen WHERE id ='$id'";
			$resultado = $conexion->query($query);
			$row = $resultado->fetch_assoc();
		?>

	<section class="form-login">
		<!-- 
			Autor: Stephanie Santana
			Fecha 12/10/21
			Desc: Mostrar el formulario de registrar con los datos del id seleccionado 
				  para que puedan ser editados por el brigadista, las fotografías deberan 
				  de volver a ser subidas

				  Todos los datos se envian a -> proceso_modificar.php con el metodo POST 
				  para que no sean visibles en la barra del usuario
		-->
		<center>
		<form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data"> 
		<h5>Llena los datos correspondientes</h5>

		<input class=controls type="text" REQUIRED name="nombre" value="<?php echo $row['nombre'] ?>" placeholder="Ingresa su nombre(s)" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Validación para el campo nombre:
					  * Solo letras altas / bajas (puede ser solo un tipo o combinadas)
					  * Longitud de 3 a 20 carcateres
					  * Se aceptan espacios
			 -->
		<input class=controls type="text" REQUIRED name="apellidos" value="<?php echo $row['apellidos'] ?>" placeholder="Digita sus apellidos" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Validación para el campo apellidos:
					  * Solo letras altas / bajas (puede ser solo un tipo o combinadas)
					  * Longitud de 3 a 20 carcateres
					  * Se aceptan espacios
			 -->
		<input class=controls type="text" REQUIRED name="estadom" value="<?php echo $row['estadom'] ?>" placeholder="Digita su estado medico" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Validación para el campo estado:
					  * Solo letras altas / bajas (puede ser solo un tipo o combinadas)
					  * Longitud de 3 a 20 carcateres
					  * Se aceptan espacios
			 -->
		
		<input class=controls type="text" REQUIRED name="lugar" value="<?php echo $row['lugar'] ?>" placeholder="Digita su lugar de encuentro">
		<input class=controls type="text" REQUIRED name="hospital" value="<?php echo $row['hospital'] ?>" placeholder="Digita el hospital de traslado">
		<h5>Carga las respectivas fotografias </h5>
		<input class=controls type="file" REQUIRED name="imagen1" accept="image/png, image/jpeg">
		<img height="50" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen1']); ?>"/>
		<input class=controls type="file" REQUIRED name="imagen2" accept="image/png, image/jpeg">
		<img height="50" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen2']); ?>"/>
		<input class=controls type="file" REQUIRED name="imagen3" accept="image/png, image/jpeg">
		<img height="50" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen3']); ?>"/>
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Validación para los campos multimedia:
					  * Solo aceptar imagenes en formato png o jpeg / jpg
					  Esta validación hace que solo se muestren como predeterminados estos formatos 
					  al momento de subir un archivo desde cualquier dispositivo de computo
			 -->

		<input class="buttons" type="submit" name="b_alta" value="Modificar">
		<input class="buttons" type="reset" name="borrar" value="Vaciar campos">
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Botones para:
					  * Enviar los datos a proceso_modificar.php
					  * Vaciar todos los campos
			 -->
		<br/>

		</form>
		</center>
	</section>


		<footer>
			<!-- 
				Autor: Stephanie Santana
				Fecha 12/10/21
				Desc: Pie de página "estatico" con hipervinculo a las redes sociales
			-->
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
