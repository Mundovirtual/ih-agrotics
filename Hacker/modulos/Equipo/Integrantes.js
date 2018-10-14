$( document ).ready(function() {	 
 CargarTablaIntegrantes();
});

function Detalles(Institucion,carrera,Habilidades,Hobbies,FechaNac){
    $("#Institucionhacker").val(Institucion);
    $("#Carrerahacker").val(carrera);
    $("#Habilidadeshacker").val(Habilidades);
    $("#Hobbieshacker").val(Hobbies);
    $("#FechaNacimientohacker").val(FechaNac);

}
 
 var tabla_nombre; 
 function CargarTablaIntegrantes() {
 	
    tabla_nombre = $("#MostrarSolicitudes").dataTable({
    	"destroy":true,
    	"bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "modulos/Equipo/TablaIntegrantes.php",
            "type": "POST"
        },
        "columns": [ 
            { "data": "id" },
            { "data": "Nombre" },
            { "data": "Correo" },
            { "data": "Cel" },
            { "data": "Inf" },  
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

 
let VarEliminar="";

function Eliminar(id){
    VarEliminar=id;
}


function EliminarHack(){
    
    $.ajax({
        url: 'modulos/solicitudes/Solicitudes.php',
        type: 'POST',
        dataType: 'json',
        data: {'IdEliminar':VarEliminar}
    })
    .done(function(resp) { 
        if (resp.Estado=='0') {
             alertify.set('notifier','position', 'top-right');
            alertify.error("Has Eliminado a un Hacker");   
            $("#ConfirmarEliminar").modal('hide');
            CargarTablaIntegrantes();  
        }
         
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
}
