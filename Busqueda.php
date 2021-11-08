<!DOCTYPE html>
<html>
<head>
	<title>Busqueda</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<!-- 
		Autor: Stephanie Santana
		Fecha 08/11/21
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
				Fecha 08/11/21
				Desc: Barra "estatica" con logo y menú desplehable de 3 lineas horizontales 
				con hipervinculos a las redes
			 -->
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


		<section id="bienvenidos">
			<br/>
			<br/>
			<h2>¿Qué tipo de búsqueda deseas efectuar?</h2>
			<p>Selecciona la opción que se adecue a ti</p>
		</section>

		<section id="blog">
			<!-- 
				Autor: Stephanie Santana
				Fecha 08/11/12
				Desc: Direcciona según sea la acción del usuario secundario
					  * Busqueda por medio de filtro -> Busqueda_nombre.php
					  * Busqueda por fotografias, muestra todos los ffegistro en el orden 
					  que se fueron ingresando -> busqueda:usuario.php
			 -->
			<h2>Recuerda tener discreción con las imágenes aquí mostradas</h2>
			<div class="contenedor">
				<article>
					<a href="Busqueda_nombre.php"><img src="img/nombre.jpg" width="400" height="250"/a>
					<h4>Buscar por nombre</h4>
				</article>				

				<article>
					<a href="busqueda_usuario.php"><img src="img/fotografias.jpg" width="400" height="250"/a>
					<h4>Ir directo al álbum de fotografías</h4>
				</article>
			</div>
		</section>

		
	</main>

	<footer>
		<!-- 
			Autor: Stephanie Santana
			Fecha 08/11/21
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