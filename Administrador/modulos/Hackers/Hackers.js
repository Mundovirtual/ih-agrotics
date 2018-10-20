
    /*Cargar tabla*/
$( document ).ready(function() { 
    CargarTablaHackers();

});
 
//controlador boton password
$( "#MostrarPsw" ).on( "click", function() { 

    if ($('#password').attr('type') == 'text') {
          $('#password').attr('type', 'password');
    } else {
      $('#password').attr('type', 'text');
    } 
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
idhackerEditar="";
function editarDatos(id,psw,celular,correoEdit){ 
    idhackerEditar=id; 
    $("#password").val(atob(psw));
    $("#CelularEdit").val(celular);
    $("#ActCorreoHacker").val(correoEdit);  
}
function ActualizarHacker(){
     psw=$("#password").val();
     cel=$("#CelularEdit").val();
     correo=$("#ActCorreoHacker").val(); 
    $.ajax({
        url: '../modulos/Hackers/hacker.php',
        type: 'POST',
        dataType: 'json',
        data: {'IdHack': idhackerEditar,"pass":btoa(psw),"celular":cel,"Correo":correo}
    })
    .done(function(respuesta) {
        if (respuesta.Estado!="0") {
            alertify.set('notifier','position', 'top-right');
            $("#EditarHacker").modal('show');
            alertify.error(respuesta.Estado); 
        }else{
            alertify.set('notifier','position', 'top-right');
            alertify.success("Datos actualizados");
            $("#EditarHacker").modal('hide'); 
        }  
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
    

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
            "url": "../modulos/Hackers/TablaHackers.php",
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
