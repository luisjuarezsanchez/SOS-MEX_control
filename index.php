<!DOCTYPE html>
<html>
<!--
#Autor: Luis Jair
#Fecha: Junio 2021
# Pagina principal de acceso de SOS-MEX
-->
<head>
	<title>SOS-MEX</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<!--
	#Autor: Stephanie
	#Fecha: Junio 2021
	# Programacion de la barra de navegacion superior
	-->	
	<header>
		<div class="contenedor">
			<h1 class="" class="icon-eye"> SOS-MEX </h1> <h1 style="color: #333">. . . .</h1>
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"  style="color: #FFFFFF"></label>

					<nav class="menu">
						<a href="index.php">Inicio</a>
						<a target="_blank" href="https://www.facebook.com/Sos-Mex-100416508942788">Facebook</a>
						<a target="_blank" href="https://twitter.com/mex_sos">Twitter</a>
						<a target="_blank" href="https://www.instagram.com/sosxmex/?hl=es-la">Instagram</a>
					</nav>
			<div class ="navegadores">
				<nav class="navbar navbar-expand-lg navbar-light bg-light" >
		   			 <div class="collapse navbar-collapse" id="navbarNavDropdown" style="background-color: #333">
		              	<ul class="navbar-nav" >
				                <li class="nav-item active">
				                  <a class="nav-link" href="#banner" style="color: #FFFFFF;  font-family: Lucida Bright"> Inicio</a>
				                </li>
				                <li class="nav-item" bd>
				                  <a class="nav-link" href="#blog" style="color: #8CFEF4; font-family: Lucida Bright"> Buscar/Ingresar</a>
				                </li>
				                <li class="nav-item">
				                	<a class="nav-link" href="#info" style="color: #FFFFFF;  font-family: Lucida Bright"> Fotos </a>
				                </li>
				                <li class="nav-item">
				                	<a class="nav-link" href="#REDES" style="color: #8CFEF4;  font-family: Lucida Bright"> Redes Sociales </a>
				                </li>
				        </ul>
		        	</div>   
				</nav>
		    </div>	
		</div>

	</header>
	<!--
	#Autor: Stephanie
	#Fecha: Junio 2021
	# Programacion del banner y de las principales acciones de la pagina para brigadistas y usuarios 
	-->	
	<main>
		<section id="banner">
		<img src="img/banner.jpg">
		<div class="contenedor">

			<h2 style="color: #FFD6B8; font-family: Lucida Bright"> . : Rescatistas especializados en catástrofes naturales : .</h2>
			
			<b> <p style="color: #E5E2DC; font-family: Lucida Bright"> . : Localiza de manera eficiente a tus seres queridos : . </p> </b>
		</div>
		</section>

		<section id="bienvenidos">
			<h2>¿Qué tipo de usuario eres?</h2>
			<p>Selecciona la opción que se adecue a ti</p>
		</section>

		<section id="blog">
			<h2>Has clic en donde desees</h2>
			<div class="contenedor">
				<article>
					<a target="_blank" href="Login.php"><img src="img/topos8.jpg" width="400" height="250"/a>
					<h4>¿Eres brigadista?<br>Inicia sesión</h4></a>
					<br>
				</article>				

				<article>
					<a target="_blank" href="curp.php"><img src="img/usuario.jpg" width="400" height="250"/a>
					<h4>¿Buscas a un ser querido?</h4> </a>
					<br>
				</article>

				<article>
					<a target="_blank" href="chatbotu.php"><img src="img/botu.jpg" width="400" height="250"/a>
					<h4>Chatbot usuario<br>de busqueda</h4> </a>
					<br>
				</article>								
			</div>
		</section>

	<section id="info">
			<h3 style="color: #FFD6B8; font-family: Lucida Bright">Estos son los valores por los cuales se rigue esta página web para ayudarte a localizar a tu ser querido ante cualquier catastrofe <i>Pericia, Valentia, Honor y Valor</i> </h3>
		<div class="contrainer">
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/topos1.jpg" class="d-block w-100" alt="bootstrap" width="600px" height="450px">
                            </div>
                            <div class="carousel-item">
                                <img src="img/topos2.jpg" class="d-block w-100" alt="..." width="600px" height="450px">
                            </div>
                            <div class="carousel-item">
                                    <img src="img/topos3.jpg" class="d-block w-100" alt="..." width="600px" height="450px">
                            </div>
                            <div class="carousel-item">
                                    <img src="img/topos4.jpg" class="d-block w-100" alt="..." width="600px" height="450px">
                            </div>
                            <div class="carousel-item">
                                    <img src="img/topos5.jpg" class="d-block w-100" alt="..." width="600px" height="450px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Despues</span>
                        </a>
                    </div>
                </div>
            </div>										
		</div>
	<!--
	#Autor: Evelyn
	#Fecha: Junio 2021
	# Codigo para hacer funcionar la plantilla de Bootstrap (Carrusel de imagenes)
	-->	
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</section>
	</main>

	<SECTION id= "REDES">
	<!--
	#Autor: Evelyn
	#Fecha: Junio 2021
	# Codigo para el pie de pagina de la pagina principal
	-->	
	<footer>
		<div class="contenedor">
			<p class="copy">SOS-MEX &copy; 2021</p>
			<div class="sociales">
				<a class="icon-facebook" target="_blank" href="https://www.facebook.com/Sos-Mex-100416508942788"></a>
				<a class="icon-twitter-squared" target="_blank" href="https://twitter.com/mex_sos"></a>
				<a class="icon-instagram" target="_blank" href="https://www.instagram.com/sosxmex/?hl=es-la"></a>
			</div>
		</div>
	</footer>

</SECTION>
</body>
</html>