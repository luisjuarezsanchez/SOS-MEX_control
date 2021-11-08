<!DOCTYPE html>
<html>
<head>
	<title>verificacion_usuario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/estilos.css">
	<style type="text/css">


        h2 {
            color: #FF6600;
            text-align: center;
        }
        h3{
        	color: #558B2F;
        }
        input{
        	background-color: #E6EE9C;
        	color:black;
        	letter-spacing: 3px;
        	font-size: x-large;
        }
        form{
        	font-size: x-large;
        }
        article{
        	padding: 10px;
        }
	</style>
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
			<br/>
			<br/>
			<h2 id="titulo">Bienvenido a SOS-MEX </h2>
			<br>
			<h3>Antes de poder realizar una busqueda es necesario que verifiquemos tu identidad</h3>
		</section>

		<section id="blog">
			<div class="contenedor">
				<img src="img/identidad.png" width="400" height="250"/a>
					<form> 
						<br><h5>Ingresa tu curp</h5> <br>
						<a  target="_blank" href="https://www.gob.mx/curp/">Consultar CURP</a> <br> <br>

						<input type="text" id="curp_input" oninput="validarInput(this)" style="width:100%;" placeholder="Ingrese su CURP">
						<pre id="resultado"></pre>				 -->
						
					</form>
					<script type="text/javascript">
						function validarInput(input) {
							var curp = input.value.toUpperCase(),
						    	resultado = document.getElementById("resultado"),
						        valido = "No válido";
						        
						    if (curpValida(curp)) {
						    	valido = "Válido";
						    	window.location.href = "busqueda.php";
						        resultado.classList.add("ok");
						    } else {
						    	resultado.classList.remove("ok");
						    }
						        
						     resultado.innerText = "CURP: " + curp + "\nFormato: " + valido;

						}

						function curpValida(curp) {
							var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
						    	validado = curp.match(re);
							
						    if (!validado)  //Coincide con el formato general?
						    	return false;
						    
						    //Validar que coincida el dígito verificador
						    function digitoVerificador(curp17) {
						        //Fuente https://consultas.curp.gob.mx/CurpSP/
						        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
						            lngSuma      = 0.0,
						            lngDigito    = 0.0;

						        for(var i=0; i<17; i++)
						            lngSuma= lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
						        lngDigito = 10 - lngSuma % 10;
						        if(lngDigito == 10)
						            return 0;
						        return lngDigito;
						    }
						    if (validado[2] != digitoVerificador(validado[1])) 
						    	return false;
						        
							return true; //Validados
						}

					</script>

			</div>
		</section>

		
	</main>

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