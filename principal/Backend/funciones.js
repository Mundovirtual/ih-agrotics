    $(document).ready(function(){
        /*Visualizar datos de la base de datos en el Fron-Ent*/
        visualizarInstitucion();
        visualizarCarrera();
    })


    function visualizarInstitucion(){
    	 $('form').ready(function(){
          var datos = $('#guardarDatos').serialize();
           $.ajax({
                type: 'post',
                url: 'Backend/institucion.php',
                data: datos,
                beforeSend:function(c){
                 $("#idInstitucion").html("Procesando....");
                },
                success: function(respuesta) {
                 $("#idInstitucion").html(respuesta);

                }
            })
         });
    }


    function visualizarCarrera(){
        $('form').ready(function(){
            var datos = $('#guardarDatoscarrera').serialize();
            $.ajax({
                type:'post',
                url:'Backend/Carrera.php',
                data:datos,
                beforeSend:function(r){
                    $("#car").html("Procesando....");

                },
                success:function(respuesta){
                    $("#car").html(respuesta);
                    
                }

            })
        })
    }