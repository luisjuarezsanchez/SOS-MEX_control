<!DOCTYPE html>
<html>
<head>
	<title>Busqueda</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<!-- 
		Autor: Stephanie Santana
		Fecha 09/10/21
		Desc: Estilos a utilizar en la interfaz
	-->
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


	<main>
		<br/>
		<br/>
		<br/>

			
		<section id="bienvenidos">
			<br/>
			<br/>
			<h2>Bienvenido topo <br/>Selecciona la acción que deseas llevar acabo</h2>
		</section>

		<section id="blog">
			<!-- 
				Autor: Stephanie Santana
				Fecha 09/10/21
				Desc: Sección para decidir que hacer como brigadista
					Dar de alta -> Registro.php es la interfaz donde se registra la victima 
									SOLO se puede acceder a esta como brigadista
					ChatBot -> chatbotb.php Lleva a la ayuda asistida con IA para los brigadistas
					Ver registros -> Busqueda_fotografias.php Muestra todos los registros realizados
									pero tiene la función de:
										*Editar
										*Elimar
										*Agregar 
			-->
			<div class="contenedor">
				<article>
					<a href="Registro.php"><img src="img/daralta.png" width="400" height="250"/a>
					<h4>Dar de alta daminificado</h4>
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

	<footer>
			<!-- 
				Autor: Stephanie Santana
				Fecha 09/10/21
				Desc: Pie de página "estatico" con hipervinculo a las redes sociales
			-->
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