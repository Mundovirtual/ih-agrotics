    /*Cargar tabla*/
$( document ).ready(function() { 
   cargarConfig();

});
  
/*Valor id para editar*/
let idEditar="";
function editar(id,hackaton,vertical,pitch,EqLimite){
    idEditar=id;
    $("#EditarHack").val(hackaton);
    $("#EditarVertical").val(vertical);
    $("#EditarFase").val(pitch);
    $("#nEquiposEditar").val(EqLimite); 
}

function actualizar(){
    let hackaton=$("#EditarHack").val();
    let vertical=$("#EditarVertical").val();
    let fase=$("#EditarFase").val();
    let equipos=$("#nEquiposEditar").val();  
    $.ajax({
        url: '../modulos/conf/conf.php',
        type: 'POST',
        dataType: 'json',
        data: {'idEdit': idEditar,'hackEdit':hackaton,'verticalEdit':fase,'equiposEdit':equipos},
    })
    .done(function(respuesta) { 
         if (respuesta.Estado=="1") {
            alertify.set('notifier','position', 'top-right');
            $("#EditarConfiguraciones").modal('hide'); 
            cargarConfig();
            alertify.success('Datos actualizados');             
        } else{
            alertify.set('notifier','position', 'top-right');
            $("#EditarConfiguraciones").modal('show'); 
            alertify.error(respuesta.Estado);   
        }
    })
    
}
function registrarconf(){
   let hack= $("#Hackaton").val();
   let vert=$("#Vertical").val();
   let fases=$("#Fases").val();
   let nEquipos=$("#nEquipos").val();
   $.ajax({
        url: '../modulos/conf/conf.php',
        type: 'POST',
        dataType: 'json',
        data: {'Hack':hack,'vert':vert,'fase':fases,"Nequipos":nEquipos}
    })
    .done(function(respuesta) { 
         if (respuesta.Estado=="1") {
            alertify.set('notifier','position', 'top-right');
            $("#ModalConfiguraciones").modal('hide'); 
            cargarConfig();
            alertify.success('Configuración registrada');   
            $("#Vertical").val('s');
            $("#Fases").val('s');
            $("#nEquipos").val('');          
        } else{
            alertify.set('notifier','position', 'top-right');
            $("#ModalConfiguraciones").modal('show'); 
            alertify.error(respuesta.Estado);   
        }
    }) 
}
/*Declarando variables para eliminar*/
let idDelete;
function Eliminar(idEliminar){ 
    idDelete=idEliminar;
}
function EliminarRegistro(){ 
    $.ajax({
        url: '../modulos/conf/conf.php',
        type: 'POST',
        dataType: 'json',
        data: {'IdEliminar':idDelete}
    })
    .done(function(respuesta) { 
         if (respuesta.Estado!="0") {
            alertify.set('notifier','position', 'top-right');
            $("#EliminarConfiguraciones").modal('hide'); 
            cargarConfig();
            alertify.success(respuesta.Estado);             
        } else{
            alertify.set('notifier','position', 'top-right');
            $("#EliminarConfiguraciones").modal('show'); 
            alertify.error('Error inesperado');   
        }
    }) 

}

var tabla_nombre;
 function cargarConfig() {
    
    tabla_nombre = $("#TablaConfiguracion").dataTable({
        "destroy":true,
        "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "../modulos/conf/tablaconf.php",
            "type": "POST"
        },
        "columns": [ 
            { "data": "id" },
            { "data": "NombreHack" },
            { "data": "Vertical" },
            { "data": "fase" },
            { "data": "limites" }, 
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
