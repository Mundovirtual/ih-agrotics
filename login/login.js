
$('#ErrorLogin').hide();
jQuery(document).on('submit','#Login',function(event){
          event.preventDefault();
           jQuery.ajax({
          url:'login/validar.php',
          type:'POST',
          dataType:'json',
          data:$("#Login").serialize(),
          beforeSend:function(){    
          }
        })
        .done(function(respuesta){ 
          if (respuesta.Estado=='7') { 
            
            alertify.error('Datos no validos');
            sleep(5);   
            location.href = "index.php";   

          } else if (respuesta.Estado=='1') {
              
    
          } else if(respuesta.Estado=='2'){
            
             location.href = "Lider/index.php"; 
          }else if (respuesta.Estado=='3') {
             location.href = "Hacker/index.php"; 
          }  
        });
});
