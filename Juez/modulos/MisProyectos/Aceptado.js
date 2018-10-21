$(document).ready(function(){ 
   ProyectosAceptados();  
});


function Detalles(DescProyecto,DescVertical,Telefono,correo,Institucion,Carrera){
$("#DescProyecto").val(DescProyecto);
$("#VerticalDesc").val(DescVertical);
$("#TelefonoHacker").val(Telefono);
$("#CorreoHacker").val(correo);
$("#Institucionhacker").val(Institucion);
$("#Carrerahacker").val(Carrera);
}

let IdHacEliminar="";
let IdProyectoEliminar="";

function SolicitudEliminar(idHack,idProyecto){
    IdHacEliminar=idHack;
    IdProyectoEliminar=idProyecto;  
}

function Eliminar(){
    
    $.ajax({
        url: 'modulos/MisProyectos/SolicitudesEliminar.php',
        type: 'POST',
        dataType: 'json',
        data: {'IdHacEliminar':IdHacEliminar,'IdProyectoEliminar':IdProyectoEliminar}
    })
    .done(function(resp) { 
        if (resp=="1") {
            alertify.set('notifier','position', 'top-right');
            alertify.success("Has dejado de participar en el proyecto"); 
            $("#ConfirmarEliminar").modal('hide');    
            ProyectosAceptados(); 
        }
         
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
}




 var tabla_nombre; 
 function ProyectosAceptados() {
   
    tabla_nombre = $("#MostrarSolicitudesAceptadas").dataTable({
      "destroy":true,
      "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "modulos/MisProyectos/TablaProyectosAceptados.php",
            "type": "POST"
        },
        "columns": [ 
            { "data": "Numero" },
            { "data": "NombreLider" },
            { "data": "Equipo" },
            { "data": "proyecto" },
            { "data": "Vertical" }, 
            { "data": "Mas" },
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
            "sZeroRecords": "No se ha validado tus solicitudes",
            "sEmptyTable": "No se ha validado tus solicitudes",
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