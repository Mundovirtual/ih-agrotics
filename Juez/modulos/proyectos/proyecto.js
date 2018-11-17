$( document ).ready(function() {
    Tablaproyectos();
    InsertarVerticales();
});
  

/*Mostrar tabla por verticales*/  
function VerticalesMostrar(id){
    tabla_nombre = $("#TablaProyectos").dataTable({
        "destroy":true,
        "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "modulos/proyectos/proyectosPorVertical.php",
            "type": "POST",
            'dataType': 'json',
            'data': {'IdVertical': id}
        },
  
           "columns": [ 
            { "data": "Num" },
            { "data": "Equipo" },
            { "data": "Vertical" },
            { "data": "proyecto" },
            { "data": "Detalles" }, 
            { "data": "calificar" } 
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
        $("#TablaIntegrantes").html(respuesta.Integrantes); 
    });
    
}
/*Insertar vertical en Dom*/
function InsertarVerticales(){ 
    $.ajax({ 
        url: 'modulos/proyectos/proyecto.php',
        type: 'POST',
        dataType: 'json',
        data: {'InsertarVerticales': '1'},
         
    })
    .done(function(respuesta) { 
      $("#CategoriaVerticales").html(respuesta.SelectVerticales);  
         
    });
    
}

/*Insertar calificaciones*/
function RegistrarEvaluacion(){
     
    $.ajax({
            url: 'modulos/rubricas/rubricas.php',
            type: 'POST',
            dataType: 'json',
            data: {'Registrar': 'registrar','Califacaciones':$("#Calificacion").serialize()},
             
        })

        .done(function(respuesta) {
             if (respuesta.Tabla=='0') {
                  window.location = '../principal/miperfil.php';   
             }
            else{   
                             
                if (respuesta.ValidarRubrica=='0') {
                     alertify.set('notifier','position', 'top-right');
                     alertify.success("Proyecto evaluado"); 
                     $("#CalificarProyecto").modal('hide');
                }
                else{
                    alertify.set('notifier','position', 'top-right');
                    alertify.error(respuesta.ValidarRubrica); 
                }
            }
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

}


/*Cargar Rubricas*/
function verticalId(id){  
        $.ajax({
            url: 'modulos/rubricas/rubricas.php',
            type: 'POST',
            dataType: 'json',
            data: {'IdVertical': id},
            beforeSend: function () {
                    $("#TablaRubricas").html("Procesando, espere por favor...");
            },
        })

        .done(function(respuesta) {
            if (respuesta.Tabla=='0') {
                  window.location = '../principal/miperfil.php';   
             }
            else{                
             $("#TablaRubricas").html(respuesta.Tabla); 
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
            { "data": "calificar" } 
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
