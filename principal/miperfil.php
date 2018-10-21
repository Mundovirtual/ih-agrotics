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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="form-group">
          <div class="row col-md-12">
            <a class="navbar-brand" href="../index.php" class="img-responsive"><img src="imagenes/logoinnovahack.png" class="img-responsive" width="30%"></a>
          </div>
        </div>
          <a class="navbar-brand" href="../index.php"><i class="fas fa-sign-in-alt"></i> INICIO</a>
          <button class="boton navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav">
                  <li class="nav-item active">
                     <a class="nav-link" href="InnovaWeeKend.html"><i class="fas fa-file-alt"></i> INNOVAWEEKEND <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="InnovaHack.html"><i class="far fa-address-book"></i> INNOVAHACK</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="Agenda.php"><i class="far fa-address-book"></i> AGENDA</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="Lideres.html"><i class="fas fa-user-lock"></i> LÍDERES</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="miperfil.php"><i class="fas fa-user-plus"></i> MI PERFIL</a>
                  </li>
       
               </ul>
          </div>
       </nav>

       <div class="container-portada bg-dark">

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
                    <label for="exampleInputEmail1" class="texto text-success">Usuario</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" aria-describedby="emailHelp" placeholder="labsol@gmail.com">
                    </div> 
                    
                  </div>
                  <div class="form-group  ">
                    <label for="exampleInputPassword1" class="texto text-success">Contraseña</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                      </div>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="contra" placeholder="Ingresar contraseña">
                    </div>

                
                  </div>

                  <div class="row botones">
                    <div class="col-lg-12">
                     <button type="button" class="btn btn-danger" id="a" onclick="acep();"><i class="fas fa-user-check"></i> ACEPTAR</button>
                     <a href="registro1.php" class="btn btn-danger" role="button" value="registrar"><i class="fas fa-user-plus"></i> REGISTRARSE</a>
                     
                    </div>
                  </div>
              </form>
            </div>
          </div>


          <div class="row img-portada col-xs-12 col-lg-5 align-items-center">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                   <div class="carousel-item active">
                        <img class="" src="imagenes/labsol/banner.png" alt="First slide">
                   </div>
                   <div class="carousel-item">
                        <img class="" src="imagenes/labsol/banner.png" alt="Second slide">
                   </div>
                   <div class="carousel-item">
                        <img class="" src="imagenes/labsol/banner.png" alt="Third slide" height="305px">
                   </div>
               </div>
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


