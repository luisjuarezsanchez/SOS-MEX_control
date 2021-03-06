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
	<link rel="stylesheet" href="css/estilo_busqueda_usuario.css">180	
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
			<br>
			<h2>Si logras identificar a quien estas buscando</h2>
			<p>Debajo de la fotografía aparece su nombre y hospital de traslado</p>
		</section>

		<center>
			<table border="1">
				<thead>
					<tr>
						<tr>
							<th colspan="11"><a href="Registro.php">Insertar registro</a></th>
						</tr>
						<!-- 
							Autor: Stephanie Santana
							Fecha 08/11/21
							Desc: Diseño de la tabla que se mostrar al usuario
					 	-->
						<th> ID </th>
						<th> Nombre </th>
						<th> Apellidos </th>
						<th> Estado medico </th>
						<th> Lugar de encuentro </th>
						<th> Hospital de traslado </th>
						<th> Fotografia 1 </th>
						<th> Fotografia 2 </th>
						<th> Fotografia 3 </th>
						<th colspan="2"> Operaciones </th>
					</tr>
				</thead>
				<tbody>
					<?php
						include("db.php");
						/*
							Autor: Stephanie Santana
							Fecha: 08/11/21
							Desc: Conexión a bd, se muestra TODA la tabla, en el orden en el cual fueron
								  ingresados los registros
						*/
						$query = "SELECT * FROM tabla_imagen";
						$resultado = $conexion->query($query);
						while($row = $resultado->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row ['id'] ?> </td>
						<td><?php echo $row ['nombre'] ?> </td>
						<td><?php echo $row ['apellidos'] ?> </td>
						<td><?php echo $row ['estadom'] ?> </td>
						<td><?php echo $row ['lugar'] ?> </td>
						<td><?php echo $row ['hospital'] ?> </td>
						<td><img height="180" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen1']); ?>"></td>
						<td><img height="180" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen2']); ?>"></td>
						<td><img height="180" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen3']); ?>"></td>
						<th><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></th>
						<th><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></th>
					</tr>

					<?php
						}
					?>
				</tbody>		
			</table>
		</center>

		
	</main>

	<footer>
		<!-- 
			Autor: Stephanie Santana
			Fecha 08/11/21
			Desc: Pie de página "estatico" con hipervinculo a las redes sociales
		-->
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