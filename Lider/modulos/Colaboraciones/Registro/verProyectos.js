$(document).ready(function(){
   Proyectos();  
});
 var tabla_nombre; 
 function Proyectos() {
   
    tabla_nombre = $("#MostrarProyectos").dataTable({
      "destroy":true,
      "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "modulos/Colaboraciones/Registro/proyectos.php",
            "type": "POST"
        },
        "columns": [ 
            { "data": "Numero" },
            { "data": "NombreLider" },
            { "data": "Equipo" },
            { "data": "proyecto" },
            { "data": "Vertical" }, 
            { "data": "Mas" },
            { "data": "solicitar" } 
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
function DetallesProyecto(NombreProyecto,DescProyecto,Vertical,DescVertical,infVertical,NombreLider,email,celular,carrera,Institucion){
$("#DProyecto").val(NombreProyecto);
$("#DDescripción").val(DescProyecto);
$("#DVertical").val(Vertical);
$("#DDescripciónv").val(Vertical);
$("#DInformación").val(infVertical);
$("#NombreLider").val(NombreLider);
$("#CorreoLider").val(email);
$("#CelularLider").val(celular);
$("#CarreraLider").val(carrera);
$("#InstituciónLider").val(Institucion);
}

function Registrar(idHacker,idProyecto){
   $.ajax({
      url: 'modulos/Colaboraciones/Registro/registrar.php',
      type: 'POST',
      dataType: 'json',
      data: {'idH':idHacker,'idP':idProyecto},
   })
   .done(function(respuesta) {
      if (respuesta.Estado=='0') {
         alertify.set('notifier','position', 'top-right');
         alertify.error("Ya has enviado tu solicitud");
      }else{
         alertify.set('notifier','position', 'top-right');
         alertify.success("Solicitud enviada"); 
      }
   })
   .fail(function() {
      console.log("error");
   })
   .always(function() {
      console.log("complete");
   });
   
}