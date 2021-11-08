google.maps.event.addDomListener(window, "load", function(){

	const ubicacion = new Localizacion(()=>{
		const myLating = {lat: ubicacion.latitude, lng: ubicacion.longitude};

		var texto = '<h1> Nombre del lugar </h1>' + '<p>Descripcion del lugar</p>'
					'<a href="https://www.google.com">Pagina web</a>';

		const options = {
			center: myLating,
			zoom: 14
		}

		var map = document.getElementById('map');

		const mapa = new google.maps.Map(map, options);

		const marcador = new google.maps.Marker({
			position: myLating,
			map: mapa,
			title: "Mi primer marcador"
		});		

		var	informacion = new google.maps.InfoWindow({
			content: texto
		});

		marcador.addListener('click', function(){
			informacion.open(mapa, marcador);
		});	


	});

});