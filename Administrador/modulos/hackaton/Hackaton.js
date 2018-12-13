
/*Registrar Hackaton*/
jQuery(document).on('submit', "#ModalRegistroHackaton", function(event){ 
	event.preventDefault(); 
     var datos=$("#ModalRegistroHackaton").serialize();  
	 jQuery.ajax({
		url: '../modulos/hackaton/Hackaton.php',
		type: 'POST',
		dataType: 'json',
		data: datos,
		beforeSend:function(){
			 
		}
	})
	.done(function(respuesta) {  
		if (respuesta.Estado!='1') {
			$('#ModalHackaton').modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error(respuesta.Estado);
		} 
		else{
			$('#ModalHackaton').modal('hide');
			alertify.set('notifier','position', 'top-right');
	 		alertify.success('Hackaton registrado');
	 		$("#NombreHack").val('');
	 		$("#InicioHack").val('');
	 		$("#EntregaProyectos").val('');
	 		$("#FinHack").val('');
	 		CargarTablaHack(); 
		}
	})
 
 
});      
 
 /*actualizar Hackaton*/
 let actualizar="";
function ActualizarHackaton(idd,Edicion,IH,FlP,TH){  
  c
	actualizar =idd;  
 	$("#EditarNombreHack").val(Edicion);
	$("#EditarInicioHack").val(IH);
	$("#EditarEntregaProyectos").val(FlP);
	$("#EditarFinHack").val(TH); 
}
 
function ActualizandoHackaton() { 
	 
	var EhN="";
	var EhI="";
	var EhE="";
	var EhF="";

	EhN=$("#EditarNombreHack").val();
	EhI=$("#EditarInicioHack").val();
	EhE=$("#EditarEntregaProyectos").val();
	EhF=$("#EditarFinHack").val();  
	/*var EhImg=$("#EditarImagenPrincipal").val();*/
	jQuery.ajax({				
		url:'../modulos/hackaton/Hackaton.php',
		type: 'POST', 
		dataType:'json',
		data: {'idAc':actualizar,'EhN':EhN,'EhI':EhI,'EhE':EhE,'EhF':EhF/*,'EhImg':EhImg*/} 
	})
 	.done(function(respuesta){
 		if (respuesta.Estado!='1') {
			$('#EditarHackaton').modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error(respuesta.Estado);
		} 
		else{
			$('#EditarHackaton').modal('hide');
			alertify.set('notifier','position', 'top-right');
	 		alertify.success('Hackaton Actualizado'); 
	 		CargarTablaHack(); 
		}
 	});}
	 
function ActivarHackaton(id,edicion){
	
	$.ajax({
		url: '../modulos/hackaton/Hackaton.php',
		type: 'POST',
		dataType: 'json',
		data: {'EstatusHackaton': id},
	})
	.done(function(respuesta) {

		if (respuesta.Estado!='1') {
			alertify.set('notifier','position', 'top-right');
	 		alertify.error(respuesta.Estado);
		} else {
			alertify.set('notifier','position', 'top-right');
	 		alertify.success(edicion+" activado");
		}
		

	}) ;

}



/*Eliminar*/
let eliminar="";

function eliminarHackaton(id){ 
	eliminar=id; 
}
  
 $(document).ready(function(){
	$("#bEliminarHackaton").click(function () { 		
	 	jQuery.ajax({
		url: '../modulos/hackaton/Hackaton.php',
		type: 'POST',
		dataType: 'json',
		data: {'IdEliminar':eliminar},
		beforeSend:function(){
			  
		}
		})
		.done(function(respuesta) {
			if (respuesta=='0') {
				$('#EliminarHackaton').modal('hide');
				alertify.set('notifier','position', 'top-right');
	 			alertify.error('Hackaton Eliminado');
				CargarTablaHack();	
			} else {
			$('#EliminarHackaton').modal('hide');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Registro referenciado');

			}
			
			 
		})
		 
	});		
});    
 
$( document ).ready(function() {
    CargarTablaHack();
});

 var tabla_nombre;
 function CargarTablaHack() {
 	
    tabla_nombre = $("#MostrarHackaton").dataTable({
    	"destroy":true,
    	"bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "../modulos/hackaton/tablaHackaton.php",
            "type": "POST"
        },
        "columns": [ 
            { "data": "id" },
            { "data": "NombreHack" },
            { "data": "Inicio" },
            { "data": "FinRegProyectos" },
            { "data": "FinHack" }, 
            { "data": "Estado" },
            { "data": "Editar" },
            { "data": "Eliminar" } 
        ],
        "oLanguage": {
            "sProcessing": "Procesando...",
            "sLengthMenu": 'Mostrar <select>' +
           		'<option value="5">5</option>' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">All</option>' +
                '</select> registros',
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
}