<!DOCTYPE html>
<html>
<!--
#Autor: Stephanie
#Fecha: Junio 2021
# Interfaz de la pagina que contiene un formulario de validacion de brigadistas, aqui se emplea el metodo POST para el envio de informacion
-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Login para miembros</title>
	<link rel="stylesheet" href="css/login.css">
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
		<form action="validarbot.php" method="post">
			<h5>Iniciar sesión como brigadista<br></h5>
			<input class=controls type="text" name="usuario" value="" placeholder="Digita tu usuario">
			<input class=controls type="password" name="contrasena" value="" placeholder="Digita tu contraseña">
			<input class="buttons" type="submit" name="" value="Ingresar">
			<input class="buttons" type="reset" name="" value="Vaciar campos">
			<p><a href="mailto:SOSxMEX@gmail.com">¿Olvidaste tu contraseña?</a></p>
		</form>
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