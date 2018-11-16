$( document ).ready(function() {
 	botones();
 	controlBotones();
});

 
function botones(){
	$.ajax({
		url: '../modulos/panel_control/panel_control.php',
		type: 'POST',
		dataType: 'json',
		data: {'botones': 'btn'},
	})
	.done(function(respuesta) {
		  $("#MostrarBotonesVerticales").html(respuesta.Botones); 
	})
	.fail(function() {
		console.log("error");
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