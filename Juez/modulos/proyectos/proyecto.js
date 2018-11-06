/*Declarando valores para consulta de integrantes*/
let idproyectos="";
function detalles(id,descProyecto,lider,email,cel,fRegistro){
 
    idproyectos=id;
    $("#DescripcionProyecto").val(descProyecto);
    $("#lider").val(lider);
    $("#email").val(email);
    $("#telefono").val(cel);
    $("#RegistroProyecto").val(fRegistro); 
    $.ajax({
 
        url: 'modulos/proyectos/proyecto.php',
        type: 'POST',
        dataType: 'json',
        data: {'idproyectos': idproyectos},
    })
    .done(function(respuesta) {  
        $("#TablaIntegrantes").html(respuesta); 
    });
    
}



$( document ).ready(function() {
 	Tablaproyectos();
});

 




 var tabla_nombre;
 function Tablaproyectos() {
  
    tabla_nombre = $("#TablaProyectos").dataTable({
    	"destroy":true,
    	"bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "modulos/proyectos/tablaProyectos.php",
            "type": "POST"
        },
  
           "columns": [ 
            { "data": "Num" },
            { "data": "Equipo" },
            { "data": "Vertical" },
            { "data": "proyecto" },
            { "data": "Detalles" }, 
            { "data": "delete" } 
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
            "sSearch": "Filtrar:",
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
