<?php
/*
	Autor: Stephanie Santana
	Fecha: 08/11/21
	Desc: Realiza la conexión de con la BD
			* Verifica al usuario brigadista en comando SQL
			* Los datos para ser verificado los obtiene de la interfaz login.php
*/
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","sosmex");

$consulta="SELECT*FROM topos where usuario='$usuario' and contrasena='$contrasena'";
/*
	Autor: Stephanie Santana
	Fecha: 08/11/21
	Desc: Verifica la existencia del brigadosta 
*/
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:interfazbrig.php");
}else{
	?>
	<?php
	/*
	Autor: Stephanie Santana
	Fecha: 08/11/21
	Desc: Da acceso al brigadosta a -> login.php para poder dar de alta a los damnificados o manda un mensaje de error si no coinciden los datos
*/
	include("Login.php");
	?>
	<script>
			alert("Usuario o contraseña incorrectos");
	</script>
	
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
/*
	Autor: Stephanie Santana
	Fecha: 08/11/21
	Desc: Se cierra la conxión con la bd
*/