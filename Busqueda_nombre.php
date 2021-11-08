<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Busqueda por nombre</title>
	<!-- 
		Autor: Stephanie Santana
		Fecha 08/11/21
		Desc: Estilos a utilizar en la interfaz
	-->
	<link rel="stylesheet" href="css/login3.css">
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

	<section class="form-login">
		<form action="consulta.php" method="POST" enctype="multipart/form-data">
		<h5>Búsqueda por nombre</h5>
		<input class=controls type="text" REQUIRED name="nombre" value="" placeholder="Digita el nombre(s)" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">
		<!-- 
			Autor: Stephanie Santana
			Fecha: 08/11/21
			Desc: Validación del campo nombre para realizar la búsqueda
				  solo acepta ledras en altas, bajas o combinadas
				  Longitud de 3 a 20 caracteres
				  Son las MISMAS caracteristicas que las validaciones para dar de alta
		 -->
		<input class=controls type="text" REQUIRED name="apellidos" value="" placeholder="Digita los apellidos" pattern="[A-Za-z ]{3,20}" title="Por favor solo ingresa letras">
		<!-- 
			Autor: Stephanie Santana
			Fecha: 08/11/21
			Desc: Validación del campo apellidos para realizar la búsqueda
				  solo acepta ledras en altas, bajas o combinadas
				  Longitud de 3 a 20 caracteres
				  Son las MISMAS caracteristicas que las validaciones para dar de alta
		 -->
		<a href=""><input class="buttons" type="submit" name="b_alta" value="Buscar">
		<a href=""><input class="buttons" type="reset" name="vaciar" value="Vaciar campos">
		<a href="Busqueda.php"><input class="buttons" type="button" name="cancelar" value="Cancelar">
		</form>	
	</section>


		<footer>
		<!-- 
			Autor: Stephanie Santana
			Fecha 08/11/21
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