 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi perfil</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/miperfil.css">
  <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css">
  <link rel="shortcut icon" href="imagenes/labsol/banner1b.jpeg" type="image/x-icon">
</head>
 
<body>
<!--Menu-->
  <?php 
  include_once("menu.php");
  ?>
<!--Fin Menu-->
 
   <div class="container-portada ">

    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="container container-login">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="text-center">Inicio de Sesión</h1>
            </div>
          </div>
          <div class="form-group">
            <div class="info" id="info">
              
            </div>
          </div>
          <form class="miperfil" id="miperfil" method="post">
             <div class="form-group">
                <label for="exampleInputEmail1" class="texto text-success">Correo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" aria-describedby="emailHelp" placeholder=" labsol@cozcyt.gob.mx ">
                </div> 
                
              </div>
              <div class="form-group  ">
                <label for="exampleInputPassword1" class="texto text-success">Contraseña</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="contra" placeholder="**********">
                </div>

            
              </div>

              <div class="row botones">
                <div class="col-lg-12">
                 <button type="button" class="btn btn-danger" id="a" onclick="acep();"><i class="fas fa-user-check"></i> ACEPTAR</button>

                      <?php 
                       include_once 'conexion/abrirconexion.php';
                       $con = new Conexion();
                       $sql = "SELECT `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack` FROM `hackatonedicion` where `status`='1'";
                       $resultado = $con->query($sql);
                      $fechas= mysqli_fetch_array($resultado);
                      if (!empty($fechas)) { 
                            $hoy=date('Y-m-d') ."\n"; 
                            $Flimit=$fechas['1']; 

                            if($Flimit>$hoy){
                             ?>
                              <a href="registro.php" class="btn btn-danger" role="button" value="registrar"><i class="fas fa-user-plus"></i> REGISTRARSE</a>
                             <?php
                            }                                  
                        }

                       ?>
               
                </div>
              </div>
          </form>
        </div>
      </div>


      <div class="row img-portada col-xs-12 col-lg-5 align-items-center">
         
       </div>
      </div>
    </div>
   </div>




   <script type="text/javascript">
    function acep(){
  var datos = $('#miperfil').serialize();
   $.ajax({
        type: 'post',
        url: 'Backend/iniciosesion/proceso.php',
        data: datos,
        beforeSend:function(c){
         $("#info").html('<div class="alert alert-success alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i><strong> Procesando..... !</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        },
        success: function(respuesta) { 
         $("#info").html(respuesta); 
         if(respuesta == 5){
         $("#info").hide();
         location.href='../Lider/index.php';

         } 
         if(respuesta == 3){
          $("#info").hide();
          location.href = '../Juez/index.php';
         }
         if(respuesta == 6){
          $("#info").hide();
          location.href = '../Hacker/index.php';
         }
        }
    })
   .always(function(){
          setTimeout(function(){
            $("#info").hide();
            location.href = "miperfil.php";
          },2000);
   })
 }
   </script>
 
	<script src="js/jquery-3.33.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>


