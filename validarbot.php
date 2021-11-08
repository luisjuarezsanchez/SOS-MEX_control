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
	/*
	Autor: Stephanie Santana
	Fecha: 08/11/21
	Desc: Permite al brigadista interactiar con la asistencia técnica
		  Es necesario la previa verificación debido a que este chatbot 
		  trae información de como funciona el sistema a nivel usuario
		  principal
*/
	header("location:chatbotb.php");
}else{
	?>
	<?php
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