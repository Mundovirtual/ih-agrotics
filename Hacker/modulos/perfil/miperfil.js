	 $(document).ready(function(){
 
			$("#nombre").prop('disabled', true);
			$("#TallaPlayera").prop('disabled', true);
			$("#Correo").prop('disabled', true);
			$("#cel").prop('disabled', true);
			$("#Contrasena").prop('disabled', true);
			$("#Institución").prop('disabled', true);
			$("#Carrera").prop('disabled', true); 
			
	 
	   		
	});
	 
	/*Activar inputs*/ 
	 function EditarPerfil(id){  
	 	 
 			Habilitarinputs();
 	
		if ($("#EditarPerfil").text()=='Guardar') { 

			$.ajax({
				url: 'modulos/perfil/DatosPerfil.php',
				type: 'POST',
				dataType: 'json',
				data: {'idAct': id,'Correo':$("#Correo").val(),'cel':$("#cel").val(),'psw':btoa($("#Contrasena").val())},
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
		$("#Contrasena").removeClass('is-invalid');
		$("#Correo").removeClass('is-invalid'); 
		$("#cel").removeClass('is-invalid');
		$("#Correo").prop('disabled', true);
		$("#cel").prop('disabled', true);
		$("#Contrasena").prop('disabled', true);
		$("#EditarPerfil").text('Editar');
		$('#Contrasena').attr('type', 'password');
	}
	function Habilitarinputs(){
		$("#Correo").prop('disabled', false);
 		$("#Correo").addClass('is-invalid'); 
		$("#cel").prop('disabled', false);
		$("#cel").addClass('is-invalid');
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
