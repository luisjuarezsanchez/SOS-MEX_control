<?php 
function curpValida(curp) 
/*
	Autor: Stephanie Santana
	Fecha: 08/11/21
	Desc: La variable re tendra el "modelo" del formato de la CURP, 
	especificando la cantidad y los tipos de caracteres, en caso de no cumplr con el modelo
	NO debera de dar acceso
*/
{
var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
validado = curp.match(re);
if (!validado) //Coincide con el formato general?
return false;
//Validar que coincida el dígito verificador

function digitoVerificador(curp17) {
/*
	Autor: Stephanie Santana
	Fecha: 08/11/21
	Desc: En esta función se obtendra la edad de la persona según el curp esto sera por medio del for
		  Las variables
		  	* IngSuma
		  	* UngDigito
		  Deben de ser flotantes por los meses debido a que no solo se toma en cuenta el año
		  Si es mayor a 18 se podra pasar a la siguiente funcíón de validar, si no es mayor de 
		  edad se quedara ahí
*/
var diccionario = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
lngSuma = 0.0,
lngDigito = 0.0;
for(var i=0; i<17; i++)
lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
lngDigito = 10 - lngSuma % 10;
if (lngDigito == 10) return 0;
return lngDigito;
}
if (validado[2] != digitoVerificador(validado[1]))
return false;
return true; //Validado
}
//Handler para el evento cuando cambia el input
//Lleva la CURP a mayúsculas para validarlo
function validarInput(input) {
	/*
	Autor: Stephanie Santana
	Fecha: 08/11/21
	Desc: Cambia todo el CURP a altas en caso de que el usuario lo escriba en bajas
		  para poder validarlo en la parte del if
*/
var curp = input.value.toUpperCase(),
resultado = document.getElementById("resultado"),
valido = "No válido";
if (curpValida(curp)) { 
valido = "Válido";
resultado.classList.add("ok");
} else {
resultado.classList.remove("ok");
}
resultado.innerText = "CURP: " + curp + "\nFormato: " + valido;
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="busqueda.php"></a>
    <!-- 
		Autor: Stephanie Santana
		Fecha: 08/11/21
		Desc: Una vez validado el CURP en el if en automático manda a la interfaz -> busqueda.php
     -->
</body>
</html>
}

