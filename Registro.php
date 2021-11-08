<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Registra un nuevo usuario</title>
	<!-- 
		Autor: Stephanie Santana
		Fecha 09/10/21
		Desc: Estilos a utilizar en la interfaz
	-->
	<link rel="stylesheet" href="css/login2.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<!-- 
				Autor: Stephanie Santana
				Fecha 09/10/21
				Desc: Barra de menú con logo 
			-->
			<h1 class="icon-eye">SOS-MEX</h1>
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>
			<nav class="menu">
				<!-- 
					Autor: Stephanie Santana
					Fecha 09/10/21
					Desc: Menu despleable de 3 barras horizontales con hipervinculos
				 -->
				<a href="index.php">Inicio</a>
				<a target="_blank" href="https://www.facebook.com/Sos-Mex-100416508942788">Facebook</a>
				<a target="_blank" href="https://twitter.com/mex_sos">Twitter</a>
				<a target="_blank" href="https://www.instagram.com/sosxmex/?hl=es-la">Instagram</a>
			</nav>
		</div>
	</header>
	<section class="form-login">
		<center>
		<form action="alta.php" method="POST" enctype="multipart/form-data"> 
		<h5>Llena los datos correspondientes</h5>
		<input class=controls type="text" REQUIRED name="nombre" value="" 
		placeholder="Ingresa su nombre(s)" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Validación para el campo nombre:
					  * Solo letras altas / bajas (puede ser solo un tipo o combinadas)
					  * Longitud de 3 a 20 carcateres
					  * Se aceptan espacios
			 -->
		<input class=controls type="text" REQUIRED name="apellidos" value="" 
		placeholder="Digita sus apellidos" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Validación para el campo apellidos:
					  * Solo letras altas / bajas (puede ser solo un tipo o combinadas)
					  * Longitud de 3 a 20 carcateres
					  * Se aceptan espacios
			 -->
		<input class=controls type="text" REQUIRED name="estadom" value="" 
		placeholder="Digita su estado medico" pattern="[A-Za-z ]{5,40}" title="Por favor solo ingresa letras">
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Validación para el campo estadom:
					  * Solo letras altas / bajas (puede ser solo un tipo o combinadas)
					  * Longitud de 3 a 20 carcateres
					  * Se aceptan espacios
			 -->
		<input class=controls type="text" REQUIRED name="lugar" value="" placeholder="Digita su lugar de encuentro">
		<input class=controls type="text" REQUIRED name="hospital" value="" placeholder="Digita el hospital de traslado">
		<h5>Carga las respectivas fotografias </h5>
		<input class=controls type="file" REQUIRED name="imagen1" accept="image/png, image/jpeg">
		<input class=controls type="file" REQUIRED name="imagen2" accept="image/png, image/jpeg">
		<input class=controls type="file" REQUIRED name="imagen3" accept="image/png, image/jpeg">
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Validación para los campos multimedia:
					  * Solo aceptar imagenes en formato png o jpeg / jpg
					  Esta validación hace que solo se muestren como predeterminados estos formatos 
					  al momento de subir un archivo desde cualquier dispositivo de computo
			 -->

		<input class="buttons" type="submit" name="b_alta" value="Dar de alta">
		<input class="buttons" type="reset" name="borrar" value="Vaciar campos">
		<a href="Busqueda_fotografias.php"><input class="buttons" type="button" name="registros" value="Ver registros">
			<!-- 
				Autor: Stephanie Santana
				Fecha: 08/11/21
				Desc: Botones para:
					  * Enviar los datos a alta.php
					  * Vaciar todos los campos realiza la acción de borrar el contenido de los campos
					  * Ver los registros -> busqueda_fotografias.php
			 -->
		</form>
		</center>



	</section>


		<footer>
			<!-- 
				Autor: Stephanie Santana
				Fecha 09/10/21
				Desc: Pie de página "estatico" con hipervinculo a las redes sociales
			-->
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
