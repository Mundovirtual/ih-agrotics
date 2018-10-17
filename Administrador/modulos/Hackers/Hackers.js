/*Cargar tabla*/
$( document ).ready(function() { 
    CargarTablaHackers();

});

/*Detalles */
function DetallesHacker(institucion,Carrera,Habilidades,Hobbies,feNac,Sexo){ 
$("#Institucion").val(institucion);
$("#Carrera").val(Carrera);
$("#Habilidades").val(Habilidades);
$("#Hobbies").val(Hobbies);
$("#FechaNacimiento").val(feNac);
$("#sexo").val(Sexo); 

}

/*Mostrar en el DOM Editar datos*/
let idhackerEditar="";
function editarDatos(id,psw,celular,correoEdit){ 

    $("#CelularEdit").val(celular);
    $("#ActCorreoHacker").val(correoEdit); 
}

/*Activar el Id para eliminar*/
let idhackerEliminar="";
function Eliminar(idhacker){
    idhackerEliminar=idhacker;
}
/*Obtener datos y actualizar*/


/*Funcion de eliminar usuario*/




/*Datos de la tabla con DataTable de jquery*/
 var tabla_nombre;
 function CargarTablaHackers() {
 	
    tabla_nombre = $("#Hackers").dataTable({
    	"destroy":true,
    	"bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "Modulos/Hackers/TablaHackers.php",
            "type": "POST"
        },
        "columns": [ 
            { "data": "id" },
            { "data": "Nombre" },
            { "data": "Celular" },
            { "data": "Email" },
            { "data": "Detalles" }, 
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