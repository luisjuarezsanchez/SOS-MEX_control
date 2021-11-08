<!DOCTYPE html>
<html>
<!--
#Autor: Stephanie
#Fecha: Junio 2021
# Interfaz de registro para dar de alta a pacientes
-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Registra un nuevo usuario</title>
	<link rel="stylesheet" href="css/login2.css">
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

	<section class="form-login">
		<!--
		#Autor: Stephanie
		#Fecha: Junio 2021
		# Estructuracion del formulario que emplea el metodo POST para el envio de informacion invocando al archivo de alta.php, se colocan las respectivas expresiones regulares que validan la cadena que se introduce en el campo correspondiente
		-->
		<center>
		<form action="alta.php" method="POST" enctype="multipart/form-data"> 
		<h5>Llena los datos correspondientes</h5>
		<input class=controls type="text" REQUIRED name="nombre" value="" 
		placeholder="Ingresa su nombre(s)" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras y palabras con un rango mayor o igual a 3">

		<input class=controls type="text" REQUIRED name="apellidos" value="" 
		placeholder="Digita sus apellidos" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras y palabras con un rango mayor o igual a 3">
		<input class=controls type="text" REQUIRED name="estadom" value="" 
		placeholder="Digita su estado medico" pattern="[A-Za-z ]{5,40}" title="Por favor solo ingresa letras y palabras con un rango mayor o igual a 5">
		<input class=controls type="text" REQUIRED name="lugar" value="" placeholder="Digita su lugar de encuentro">
		<input class=controls type="text" REQUIRED name="hospital" value="" placeholder="Digita el hospital de traslado">
		<h5>Carga las respectivas fotografias </h5>
		<input class=controls type="file" REQUIRED name="imagen1" accept="image/png, image/jpeg">
		<input class=controls type="file" REQUIRED name="imagen2" accept="image/png, image/jpeg">
		<input class=controls type="file" REQUIRED name="imagen3" accept="image/png, image/jpeg">
		<input class="buttons" type="submit" name="b_alta" value="Dar de alta">
		<input class="buttons" type="reset" name="borrar" value="Vaciar campos">
		<a href="Busqueda_fotografias.php"><input class="buttons" type="button" name="registros" value="Ver registros">
		</form>
		</center>
	</section>
	<!--
	#Autor: Evelyn
	#Fecha: Junio 2021
	# Codigo para el pie de pagina de la pagina principal
	-->	
		<footer>
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
