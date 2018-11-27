$( document ).ready(function() {
	 
	  InsertarVerticales();
	  MostrarCalificaciones();
	 
});
 

/*Insertar vertical en Dom*/
function InsertarVerticales(){ 
    $.ajax({ 
        url: '../modulos/cal_x_juez/calf_juez_Xproyectos.php',
        type: 'POST',
        dataType: 'json',
        data: {'InsertarVerticales': '1'},
         
    })
    .done(function(respuesta) { 
      $("#InsertVerticales").html(respuesta.SelectVerticales);  
         
    });
    
}

function VerticalesMostrar(idVertical){
	if (idVertical!=0) {
		 $("#Mostrar").show(); 
		 $("#Calificaciones").hide();
	 	 $.ajax({ 
	        url: '../modulos/VistaEquipos/VistaEquipos.php',
	        type: 'POST',
	        dataType: 'json',
	        data: {'idVertical': idVertical},
	         
	    })
	    .done(function(respuesta) { 

			$("#FaseUnoEquipos").html(respuesta.FaseUno);
			$("#FaseDosEquipos").html(respuesta.FaseDos);
			$("#FaseTresEquipos").html(respuesta.FaseTres);

	 	       
	    });
	}else{
		$("#Mostrar").hide();
		 MostrarCalificaciones();
		$("#Calificaciones").show();
		
	}
	
}
 
 
var tabla_nombre;
 function MostrarCalificaciones() {
  
    tabla_nombre = $("#Calificaciones").dataTable({ 
    	'dom': 'Bfrtip',
        "destroy":true,
        "bDeferRender": true,
        "sPaginationType": "full_numbers",
          
        "ajax": {
            "url": "../modulos/cal_x_juez/calf_juez_Xproyectos.php",
            "type": "POST"
        },
 
        "columns": [ 
            { "data": "id" },
            { "data": "Equipo" },
            { "data": "Proyecto" }, 
            { "data": "Vertical" },
            { "data": "Juez" },             
            { "data": "Fase" },
            { "data": "Calificacion" }  
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
            } 
       
               

        }
    });
}