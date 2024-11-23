(function(){

	var actualizarHora = function(){
				
		// Variables para ir agregando su respectivos valores
		var fecha = new Date();

		var	horas = fecha.getHours();
		var minutos = fecha.getMinutes();
		var segundos = fecha.getSeconds();

		// Accedemos a los elementos del DOM para agregar mas adelante sus correspondientes valores
		var time = document.getElementById('time');
	
		//-->Detectamos cuando sean las 0 AM y transformamos a 12 AM
		if (horas == 0 ){
			horas = 12;
		}
		//--> Para mostrar un cero antes de las horas
		if (horas < 10){
			horas = '0' + horas;
		}
		//--> Minutos
		if (minutos < 10){ 
			minutos = "0" + minutos; 
		}
		//--> Segundos
		if (segundos < 10){ 
			segundos = "0" + segundos; 
		}
		//--> Si son 00:00:00 realiza los cambios de precios. 
 		if(horas == 17 && minutos == 0 && segundos == 0){ 		
			location.href = "cambiarDatos.php";
		}		

		console.log(minutos);
	};
	
	actualizarHora();
	var intervalo = setInterval(actualizarHora, 1000);
	
}())