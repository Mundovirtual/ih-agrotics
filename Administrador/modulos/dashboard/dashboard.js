

$( document ).ready(function() {
 	$.ajax({
		url: '../modulos/dashboard/playeras.php',
		type: 'POST',
		dataType: 'json',
		data: {'id': '1'},
	})
	.done(function(respuesta) {		 
		$("#ChicaHacker").text(respuesta[0]);
		$("#MedianaHacker").text(respuesta[1]);
		$("#GrandeHacker").text(respuesta[2]);
		$("#ExtraGrandeHacker").text(respuesta[3]);
		$("#ChicaMentores").text(respuesta[4]);	
		$("#MedianaMentores").text(respuesta[5]);		
		$("#GrandeMentores").text(respuesta[6]);		
		$("#ExtraGrandeMentores").text(respuesta[7]);
		$("#ProyectosNumero").text(respuesta[8]);
		$("#ParticipantesNumero").text(respuesta[9]);
		$("#MentoresNumero").text(respuesta[10]);
		$("#HackersNumero").text(respuesta[11]); 
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});


});
