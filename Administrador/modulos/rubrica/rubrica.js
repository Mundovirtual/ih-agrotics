$(document).ready(function(){  
     
     CargarTablaRubricas();
      var i=1;  
      /*Añadir columna*/
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><textarea type="text" rows="1" name="rubricas[]" placeholder="Criterio de evaluación" class="form-control name_list letras" /></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      /*Eliminar columna*/
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });      
 
 });  

/*Obtener valores*/
function registrar_rubricas(){
        let id=$("#idVerticalRubricas").val();         
        let Rubricas=$('#RegistrarEvaluacion').serialize();    
          $.ajax({
            url: '../modulos/rubrica/rubrica.php',
            type: 'POST',
            dataType: 'json',
            data: {'idVertical': id,'Rubricas':Rubricas},
          })
          .done(function(respuesta) {
              if (respuesta.Estado=='1') {
                $('#ModalRubricas').modal('hide')
                alertify.set('notifier','position', 'top-right');
                CargarTablaRubricas();
                alertify.success('Rubricas registradas');
                $('#RegistrarEvaluacion')[0].reset();  
              }else{ 
                $('#ModalRubricas').modal('show');
                alertify.set('notifier','position', 'top-right');
                alertify.error(respuesta.Estado);
              }
              
          }) ;
          
}

let idEditar="";
function EditarRubrica(id,vert,rubrica){
  idEditar=id;
  $("#infoVertical").val(vert);
  $("#cEvaluacion").val(rubrica);

}

function Actualizar(){ 
 
 let rubrica=$("#cEvaluacion").val();
  $.ajax({
    url: '../modulos/rubrica/rubrica.php',
    type: 'POST',
    dataType: 'json',
    data: {'idrubrica': idEditar,'rubrica':rubrica},
  })
  .done(function(respuesta) {
    if (respuesta.Estado=='1') {
          $('#EditarRubricas').modal('hide');
          alertify.set('notifier','position', 'top-right');
          CargarTablaRubricas();
          alertify.success('Rubrica actualizada');

    }
    else{
          $('#EditarRubricas').modal('show');
          alertify.set('notifier','position', 'top-right');
          alertify.error(respuesta.Estado);
    }
  });
 
}

let idEliminar="";
function EliminarRubrica(id){
  idEliminar=id;
}

function Eliminar(){
  $.ajax({
    url: '../modulos/rubrica/rubrica.php',
    type: 'POST',
    dataType: 'json',
    data: {'IdEliminar': idEliminar},
  })
  .done(function(respuesta) {
     if (respuesta.Estado=='1') {
          $('#EliminarRubricas').modal('hide');
          alertify.set('notifier','position', 'top-right');
          CargarTablaRubricas();
          alertify.success('Rubrica eliminada');
    }
    else{
          $('#EliminarRubricas').modal('hide');
          alertify.set('notifier','position', 'top-right');
          alertify.error(respuesta.Estado);
    }
  });
  
}
 var tabla_nombre;
 function CargarTablaRubricas() { 
    tabla_nombre = $("#MostrarRubricas").dataTable({
      "destroy":true,
      "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "../modulos/rubrica/TablaRubricas.php",
            "type": "POST"
        },

           "columns": [ 
            { "data": "Num" }, 
            { "data": "Vertical" },
            { "data": "Pregunta" },
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

 