  
 $(document).ready(function(){
 	$("#ProyectoRegistrado").hide(); 
   	$("#RegistrarProyecto").hide(); 
 	validar(); 
   	
   
   		
});
/*Validar si existe */
function validar(){

   		$.ajax({
   			url: 'modulos/RegistroProyectos/Registro.php',
   			type: 'POST',
   			dataType: 'json',
   			data: {'Validar': "1"},
   			beforeSend: function () {
                  //  $("#Cargarpagina").html("Procesando, espere por favor...");
            },
   		})
   		.done(function(respuesta) { 
   			if (respuesta.Validar=="0") {
   				$("#RegistrarProyecto").hide(); 
   				$("#ProyectoRegistrado").show(); 
	 		 	$("#Mostrarequipo").prop('disabled', true);
				$("#Mostrarproyecto").prop('disabled', true);
				$("#MostrardescripcionProyecto").prop('disabled', true);
				$("#MVertical").prop('disabled', true);
				$("#MostrarDescripcionVertical").prop('disabled', true);
				$("#MostrarAsesoria").prop('disabled', true);
   				 
   				$("#Mostrarequipo").val(respuesta.Equipo);
				$("#Mostrarproyecto").val(respuesta.Nombre);
				$("#MostrardescripcionProyecto").val(respuesta.Descripcion);
				$("#MVertical").val(respuesta.Vertical);
				$("#MostrarDescripcionVertical").val(respuesta.DescripcionVertical);
				$("#MostrarAsesoria").val(respuesta.Asesoria);
 
   		  	}

   			if(respuesta.Validar=="1") {  
   				
   				$("#RegistrarProyecto").show();   

   			}
   		}) ;
}

/*Registrar*/
 jQuery(document).on('submit', "#RegistroProyecto", function(event){
	event.preventDefault(); 
     let datos=$(this).serialize();  
	jQuery.ajax({
		url: 'modulos/RegistroProyectos/Registro.php',
		type: 'POST',
		dataType: 'json',
		data: datos,
		beforeSend:function(){			
		}
	})
	 
	.done(function(respuesta) {
		console.log(respuesta.Estado);
		if (respuesta.Estado=="00") { 
			alertify.set('notifier','position', 'top-right');
	 		alertify.success('Proyecto registrado');
	 		validar();
		} else {
 
			alertify.set('notifier','position', 'top-right');
	 		alertify.error(respuesta.Estado);		
		 
		 }
	})
	.fail(function(responseText) {
        console.log(responseText.responseText); 
         
	})
	.always(function() {
		console.log("complete");
	});
});      
 