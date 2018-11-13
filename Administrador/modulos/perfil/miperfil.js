	 $(document).ready(function(){
		$("#nombre").prop('disabled', true);
		$("#Usuario").prop('disabled', true);
		$("#Correo").prop('disabled', true);
		$("#Contrasena").prop('disabled', true);
   		
	});
	 
	/*Activar inputs*/ 
	 function EditarPerfil(id){  
	 	 
 			Habilitarinputs();
 	
		if ($("#EditarPerfil").text()=='Guardar') { 

			$.ajax({
				url: '../modulos/perfil/DatosPerfil.php',
				type: 'POST',
				dataType: 'json',
				data: {'idAct': id,'Usuario':$("#Usuario").val(),'Correo':$("#Correo").val(),'Contrasena':btoa($("#Contrasena").val())},
			})
			.done(function(respuesta) {

				 if (respuesta.Estado=="0") {
				 	deshablitarInput();
   			  		alertify.set('notifier','position', 'top-right');
	 				alertify.success('Perfil actualizado');

	   		  	}else{
	   		  		Habilitarinputs();
	   		  		alertify.set('notifier','position', 'top-right');
	 				alertify.error(respuesta.Estado);
	   		  	}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			 
		}
		else{
			$("#EditarPerfil").text('Guardar');
		} 

	 }

	function deshablitarInput(){
		$("#Usuario").removeClass('is-invalid');
		$("#Correo").removeClass('is-invalid'); 
		$("#Contrasena").removeClass('is-invalid');
		$("#Usuario").prop('disabled', true);
		$("#Correo").prop('disabled', true);
		$("#Contrasena").prop('disabled', true);
		$("#EditarPerfil").text('Editar');
		$('#Contrasena').attr('type', 'password');
	}
	function Habilitarinputs(){
		$("#Correo").prop('disabled', false);
 		$("#Correo").addClass('is-invalid'); 
		$("#Usuario").prop('disabled', false);
		$("#Usuario").addClass('is-invalid');
		$("#Contrasena").prop('disabled', false);
		$("#Contrasena").addClass('is-invalid');
		$('#Contrasena').attr('type', 'text');
	}
 
		 //controlador boton password
	$( "#MostrarPsw" ).on( "click", function() { 

	    if ($('#Contrasena').attr('type') == 'text') {
	          $('#Contrasena').attr('type', 'password');
	    } else {
	      $('#Contrasena').attr('type', 'text');
	    } 
	});
