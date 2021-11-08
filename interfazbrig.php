<!DOCTYPE html>
<html>
<!--
#Autor: Evelyn
#Fecha: Junio 2021
# Pagina principal que muestra la interfaz de los brigadistas una vez que han iniciado sesion con sus credenciales de acceso
-->
<head>
	<title>Busqueda</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
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


	<main>
		<br/>
		<br/>
		<br/>
		 <!--
		#Autor: Luis Jair
		#Fecha: Junio 2021
		# Acciones para brigadistas, unicamente se coloca la ruta de acceso de cada uno de los PHP correspondientes segun su imagen y accion
		-->
		<section id="bienvenidos">
			<br/>
			<br/>
			<h2>Bienvenido topo <br/>Selecciona la acción que deseas llevar acabo</h2>
		</section>

		<section id="blog">
			<div class="contenedor">
				<article>
					<a href="Registro.php"><img src="img/daralta.png" width="400" height="250"/a>
					<h4>Darde alta daminificados</h4>
				</article>				

				<article>
					<a target="" href="chatbotb.php"><img src="img/botu.jpg" width="400" height="250"/a>
					<h4>Chatbot brigadistas</h4> </a>
					<br>
				</article>

				<article>
					<a target="" href="Busqueda_fotografias.php"><img src="img/registros.jpg" width="400" height="250"/a>
					<h4>Ver registros</h4> </a>
					<br>
				</article>				
			</div>
		</section>
	</main>
	<!--
	#Autor: Evelyn
	#Fecha: Junio 2021
	# Codigo para el pie de pagina de la pagina principal
	-->	
	<footer>
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