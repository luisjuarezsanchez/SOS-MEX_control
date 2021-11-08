<!DOCTYPE html>
<html>
<head>
	<title>Busqueda</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/estilo_busqueda_usuario.css">
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
		<section id="bienvenidos">
			<br>
			<h2>Si logras identificar a quien estas buscando</h2>
			<p>Debajo de la fotografía aparece su nombre y hospital de traslado</p>
		</section>

		<center>
			<table border="1">
				<thead>
					<tr>
						<th> ID </th>
						<th> Nombre </th>
						<th> Apellidos </th>
						<th> Estado medico </th>
						<th> Lugar de encuentro </th>
						<th> Hospital de traslado </th>
						<th> Fotografia 1 </th>
						<th> Fotografia 2 </th>
						<th> Fotografia 3 </th>
					</tr>
				</thead>
				<tbody>
					<?php
						include("db.php");
						$query = "SELECT * FROM tabla_imagen WHERE nombre='$nombre'";
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
						<td><img height="220" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen1']); ?>"></td>
						<td><img height="220" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen2']); ?>"></td>
						<td><img height="220" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen3']); ?>"></td>
					</tr>

					<?php
						}
					?>
				</tbody>		
			</table>
		</center>

		
	</main>

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
	

</body>
</html>