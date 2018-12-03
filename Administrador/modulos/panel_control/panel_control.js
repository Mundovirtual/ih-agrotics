$( document ).ready(function() {
 	botones();  
});

 
function botones(){
	$.ajax({
		url: '../modulos/panel_control/panel_control.php',
		type: 'POST',
		dataType: 'json',
		data: {'botones': 'btn'},
	})
	.done(function(respuesta) {  
		if (respuesta.Botones=='0') {
			$("#AlertaConfiguracionPanel").show(); 
			
		}else{ 
		 
			$("#BottonPanel").show();
			$("#BottonFaseUno").html(respuesta['0']['faseButton']);			
			$("#BottonFaseDos").html(respuesta['1']['faseButton']);
			$("#NEquipoFaseDos").text(respuesta['1']['NEquipos']+" finalistas");			
			$("#BottonFaseTres").html(respuesta['2']['faseButton']);
			$("#NEquipoFaseTres").text(respuesta['2']['NEquipos']+" finalistas");

 
		}
		 
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
}

 function EstadoFase(id,fase,equipos,estatus){
 	  
  $.ajax({
		url: '../modulos/panel_control/panel_control.php',
		type: 'POST', 
		data: {'id': id,'fase': fase ,'Equipos': equipos,'Estatus':estatus},
	})
	.done(function(respuesta) { 
 			botones(); 
	})
	.fail(function() {
	 
    })
	.always(function() {
		console.log("complete");
	});

 
 	
 }

/*Alerty fy*/
	 
	function VerticalAlerta(vertical){  
		alertify.set('notifier','position', 'top-right');
 		alertify.success( 'Seleccionaste : '+vertical);

 		
 }

 