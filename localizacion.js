class Localizacion{
	constructor(callback){
		if(navigator.geolocation){
			//Obtener ubuicacion
			navigator.geolocation.getCurrentPosition((position)=>{
				this.latitude = position.coords.latitude;
				this.longitude = position.coords.longitude;

				callback();
			});

		}else{
			alert("No compatible")
		}
	}
}