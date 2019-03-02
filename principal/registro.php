<?php 
  include 'conexion/abrirconexion.php';
  $con = new Conexion();
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css">
    <script src="js/jquery-3.33.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Backend/funciones.js"></script>
  </head>
 
  <body>

    <!--Menu-->
    <div class="row">
        <div class="col-md-12" >
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <img class="img-responsive" src="imagenes/logoinnovahack.png" width="150"/>    
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 40%;" >
                <ul class="navbar-nav">
                  <li class="nav-item">
                   <a class="navbar-brand" href="../index.php">
                      <i class="fas fa-sign-in-alt"></i>
                      Inicio
                   </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="innovaweekend.php">
                        <i class="fas fa-file-alt"></i>
                        Innovaweekend
                        <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="InnovaHack.php">
                        <i class="far fa-address-book"></i>
                        Innovahack
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="Agenda.php">
                          <i class="far fa-address-book">
                          </i>
                          Agenda
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="Lideres.php">
                          <i class="fas fa-user-circle"></i>
                          Lideres
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="miperfil.php">
                          <i class="fas fa-user-plus">
                          </i>
                          Mi perfil
                      </a>
                  </li>
                </ul>
              </div>
            </nav>
        </div>
    </div>

    <!--Fin Menu

      Banner--> 

       <div class="row">
            <div class="col-md-12">
                <div style="background-color:#E6E6E6;" align="center">
                  <img class="img-responsive" src="imagenes/esalud/logosconvocantes.png" width="850">  
                </div>
            </div>
        </div>

 <!--Fin banner

    --> 


  <a href="miperfil.php" class="btn btn-danger" role="button" value="registrar"><i class="fas fa-arrow-circle-left"></i>  Ir a Mi perfil</a>
 
 
  <body class="bg-dark">
  
    <?php include("Backend/modal_institucion.php");?>
    <?php include("Backend/modal_carrera.php");?>
    
   
    <form class="formulario" name="formulario" id="formulario" method="post">
      
      <div class="container">

        <div class="form-row justify-content-lg-center">
               <div class="form-group col-md-6">
                <label for="#">Rol :<small class="text-danger"> (Required)</small></label>
                <select class="form-control" id="rol" name="rol">
                  <option value="0"> -- Seleccionar Rol --</option>
                <?php 
                require_once 'conexion/abrirconexion.php';
                $con = new Conexion();
                $sql = "SELECT * FROM `rol`";
                $resultado = $con->query($sql);
                while($row = mysqli_fetch_array($resultado)){
                  ?>
                  <option value="<?php echo $row['idRol']?>"><?php echo $row['Rol']?></option>
                  <?php
                }
                ?>
                </select>
               </div>
        </div>


        <div class="form-group">
          <h1 class="text-white"><i class="far fa-address-card"></i> Datos personales</h1>
        </div>
             <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="#">Nombre :<small class="text-danger"> (Required)</small></label>
                     <input type="text" class="input form-control nombress" onkeypress="return sololetras(event)" name="nombre" id="nombre" placeholder="Ingresar Nombre" onpaste = "alert('No permitido Ctrl + v');return false">
                  </div>
                  <div class="form-group col-md-6" id="nombre">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="inputPassword4">Apellido Paterno:<small class="text-danger "> (Required)</small>:</label>
                        <input type="text" name="apellidop" class="form-control nombress" id="apellidop" onkeypress="return palabra(event)"  placeholder="Apellido paterno"  onpaste = "alert('No permitido Ctrl + v');return false">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4">Apellidos Materno:<small class="text-danger"> (Required)</small>:</label>
                        <input type="text" name="apellidom" class="form-control nombress" id="apellidom" onkeypress="return palabra(event)"  placeholder="Apellido Materno" onpaste = "alert('No permitido Ctrl + v');return false">
                      </div>
                    </div>
                  </div>
             </div>
             <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="#">Email :<small class="text-danger"> (Required)</small> </label>
                     <input type="email" class="form-control" id="email" name="correo" placeholder="Labsol@gmail.com" onkeypress="return letrasnumeros(event)" onpaste = "alert('No permitido Ctrl + v');return false">
                     <div id="infoemail">
                     </div>
                  </div>
                  <div class="" id="checkemailresponse"></div>
                  <div class="form-group col-md-6">
                     <label for="#">Cel :<small class="text-danger"> (Required)</small></label>
                     <input type="tel" class="form-control" name="cel" onkeypress="return solonumeros(event)" id="cel"  placeholder="000 000 00 00"  onpaste = "alert('No permitido Ctrl + v');return false">
                  </div>
             </div>
                   <div class="form-row">
                     <div class="form-group col-md-6">
                     <label for="exampleFormControlSelect1">Institución :<small class="text-danger"> (Required)</small></label>
                      <div id="idInstitucion">
                        
                     </div>
                      
                      
                     </div>
                   </div>     
             <div class="form-row" >
                  <div class="form-group col-md-6">
                     <label for="#">Facebook</label>
                     <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Ingresar cuenta" onpaste = "alert('No permitido Ctrl + v');return false" onkeypress="return letrasnumeros(event)">
                  </div>
                  <div class="form-group col-md-6">

                     <label for="exampleFormControlSelect1">Carrera/Licenciatura :<small class="text-danger"> (Required)</small></label>
                    <div id="car">
                      
                    </div>
                </div>
             </div>

             <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="#">Twitter</label>
                     <input type="text" class="form-control" name="twitter"  id="twitter" placeholder="Ingresar cuenta" onpaste = "alert('No permitido Ctrl + v');return false" onkeypress="return letrasnumeros(event)">
                  </div>
                  <div class="form-group col-md-6">
                     <label for="#">Fecha de Nacimiento :<small class="text-danger"> (Required)</small></label>
                     <div class="row">
                       <div class="col-xs-4 col-md-4">
                        <label> Dia</label>
                        <select name="dia" class="form-control" id="dia">
                          <option value="0">-- Seleccionar--</option>
                          <?php
                          for ($i=1; $i<=31; $i++) {
                              if ($i == date('j'))
                                  echo '<option value="'.$i.'">'.$i.'</option>';
                              else
                                  echo '<option value="'.$i.'">'.$i.'</option>';
                          }
                          ?>
                        </select>
                       </div>

                       <div class="col-xs-4 col-md-4">
                        <label>Mes</label>
                        <select name="mes" id="mes" class="form-control">
                          <option value="0">-- Seleccionar--</option>
                           <option value="1">Enero</option>
                           <option value="2">Febrero</option>
                           <option value="3">Marzo</option>
                           <option value="4">Abril</option>
                           <option value="5">Mayo</option>
                           <option value="6">Junio</option>
                           <option value="7">Julio</option>
                           <option value="8">Agosto</option>
                           <option value="9">Septiembre</option>
                           <option value="10">Octubre</option>
                           <option value="11">Noviembre</option>
                           <option value="12">Diciembre</option>
                        </select>                          
                       </div>

                       <div class="col-xs-4 col-md-4">
                        <label>Año</label>
                           <select name="año" id="año" class="form-control">
                            <option value="0">-- Seleccionar--</option>
                            <?php
                            for($i=date('o'); $i>=1910; $i--){
                                if ($i == date('o'))
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                else
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                            ?>
                           </select>
                       </div>
                     </div>
                  </div>
                  
             </div>

             <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="exampleFormControlSelect1">Sexo :<small class="text-danger"> (Required)</small></label>
                     <select id="sexo" class="form-control" name = "sexo">
                      <option value="0">-- Seleccionar sexo --</option>
                     <?php 
                     include_once 'conexion/abrirconexion.php';
                     $con = new Conexion();
                     $sql = "SELECT * FROM `genero`";
                     $resultado = $con->query($sql);
                     while ($row = mysqli_fetch_array($resultado)) {
                       ?>
                       <option value="<?php echo $row['idSexo']?>"><?php echo $row['Sexo']?></option>
                    <?php
                     }
                     ?>
                     </select>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="exampleFormControlSelect1">Tallas :<small class="text-danger"> (Required)</small></label>
                     <select class="form-control" id="talla" name="talla">
                       <option value="0">-- Seleccionar talla --</option>
                     
                      <?php 
                      require_once 'conexion/abrirconexion.php';
                      $con = new Conexion();
                      $sql = "SELECT * FROM `talla_playera`";
                      $resultado = $con->query($sql);
                      while($row = mysqli_fetch_array($resultado)){
                        ?>
                        <option value="<?php echo $row['idTalla_Playera'] ?>"><?php echo $row['TallaCompleta'] ?></option>
                        <?php
                      }

                      ?>
                      </select>

                 </div>
                  
             </div>
             <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="exampleFormControlSelect1">Habilidades</label>
                     <input type="text" class="form-control habhob" name="habilidades" id="habilidades" onkeypress="return sololetras(event)" placeholder="Habilidades" onpaste = "alert('No permitido Ctrl + v');return false">   
                  </div>

                  <div class="form-group col-md-6">
                     <label for="exampleFormControlSelect1">Hobbies :</label>
                     <input type="text" class="form-control habhob" name="hobbies" id="hobbies" placeholder="Hobbies" onkeypress="return sololetras(event)" onpaste = "alert('No permitido Ctrl + v');return false">   
                  </div>
             </div>
             
             
             <div class="form-row">
                   <div class="form-group col-md-6">
                     <label for="#">Contraseña :<small class="text-danger"> (Required)</small></label>
                     <input type="text" class="form-control" name="contraseña"  id="password" onkeypress="return psw(event)" placeholder="********" onpaste = "alert('No permitido Ctrl + v');return false">
                  </div>
                  <div class="form-group col-md-6">
                     <label for="#">Confirmar contraseña :<small class="text-danger"> (Required)</small></label>
                     <input type="text" class="form-control" name="contraseña" id="rpassword" id="contraseña" onkeypress="return psw(event)" placeholder="********" onpaste = "alert('No permitido Ctrl + v');return false">

                  </div>
            </div>

                  <script type="text/javascript">
                    /*--------------INICIO VALIDACION DE CONTRASENA-------------- */

                  $(document).ready(function() {
                    $("#rpassword").keyup(checkPasswordMatch);
                  });
                  $(document).ready(function() {
                    $("#password").keyup(checkPasswordMatch2);
                  });

                  function checkPasswordMatch2() {
                  var repeatPass = document.getElementById('rpassword').value;
                  var repeatclave = repeatPass.length;
                  if (repeatclave > 0) {
                  var password = $("#password").val();
                  var confirmarPassword = $("#rpassword").val();
                  if (password != confirmarPassword) {
                      $("#divchearsisoniguales").html("<div class='alert alert-danger'><i class='fa fa-close'></i>  Las contraseñas NO coinciden!<input value='error' type='hidden' name='passwordchecker'></div>");
                  } else {
                      $("#divchearsisoniguales").html("<div class='alert alert-success'><i class='fa fa-check'></i> Las contraseñas coinciden.<input type='hidden'  value='1' name='passwordchecker'></div>");
                  }
                }
                  }

                  function checkPasswordMatch() {
                  var repeatPass = document.getElementById('password').value;
                  var repeatclave = repeatPass.length;
                  if (repeatclave > 0) {
                  var password = $("#password").val();
                  var confirmarPassword = $("#rpassword").val();
                  if (password != confirmarPassword) {
                  $("#divchearsisoniguales").html("<div class='alert alert-danger'><i class='fa fa-close'></i>  Las contraseñas NO coinciden!<input value='error' type='hidden' name='passwordchecker'></div>");
                  } else {
                      $("#divchearsisoniguales").html("<div class='alert alert-success'><i class='fa fa-check'></i> Las contraseñas coinciden.<input type='hidden'  value='1' name='passwordchecker'></div>");
                  }
      }
                  }
  /* ------------FIN DE VALIDACION DE CONTRASENA---------------------*/
                  </script>
            
             <div class="form-row">
                  <div class="form-group col-md-6" id="error">
                      
                  </div>
                  <div class="form-group col-md-6" id="divchearsisoniguales">
                     
                  </div>
             </div>
             <div class="form-row">
               <div class="form-group col-md-12 center-block" id="insertado">
                 
               </div>
             </div>
               
             
             <div class="form-group">
               <button type="submit" id="btn" class="btn btn-danger" value = "registrar"><i class="fas fa-user-check"></i> Registrar</button>
             </div>
           </div>
  </form>
   </div>
    <script type="text/javascript">
   /*----------------Guardar el registro del usuario--------------------*/
      $('form').submit(function(e){
        var datos = $('#formulario').serialize();
        e.preventDefault();
         $.ajax({
              type: 'post',
              url: 'Backend/Create_registro.php',
              data: datos,
              beforeSend:function(){
                $("#info").html('<div class="alert alert-success alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i><strong> Procesando..... !</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

              },
              success: function(respuesta) {
                 $("#insertado").html(respuesta);
              }
          })

      });
  /*--------------VALIDACION CON LETRAS NUMEROS PALABRAS ----------------------------*/
  function solonumeros(e) {
      key = e.keyCode || e.which;
      teclado = String.fromCharCode(key);
      numero = "0123456789";
      especiales = "8-37-38-46-27";
      teclado_especial = false;
      for (var i in especiales) {
          if (key == especiales[i]) {
              teclado_especial = true;
          }
      }
      if (numero.indexOf(teclado) == -1 && !teclado_especial) {
          return false;
      }
  }

  function sololetras(e) {
      key = e.keyCode || e.which;
      teclado = String.fromCharCode(key).toLowerCase();
      letras = "abcdefghijklmnñopqrstuvwxyzáéíóú ";
      especiales = "8-9-32-37-38-46-164";
      teclado_especial = false;
      for (var i in especiales) {
          if (key == especiales[i]) {
              teclado_especial = true;
              break;
          }
      }
      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
          return false;
      }
  }

  function letrasnumeros(e) {
      key = e.keyCode || e.which;
      teclado = String.fromCharCode(key).toLowerCase();
      letras = "abcdefghijklmnñopqrstuvwxyzáéíóú1234567890._-@";
      especiales = "9-32-37-38-46-164";
      teclado_especial = false;
      for (var i in especiales) {
          if (key == especiales[i]) {
              teclado_especial = true;
              break;
          }
      }
      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
          return false;
      }
  }

  function psw(e) {
      key = e.keyCode || e.which;
      teclado = String.fromCharCode(key).toLowerCase();
      letras = "abcdefghijklmnñopqrstuvwxyz1234567890._-@";
      especiales = "9-32-37-38-46-164";
      teclado_especial = false;
      for (var i in especiales) {
          if (key == especiales[i]) {
              teclado_especial = true;
              break;
          }
      }
      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
          return false;
      }
  }

  function palabra(e) {
      key = e.keyCode || e.which;
      teclado = String.fromCharCode(key).toLowerCase();
      letras = "abcdefghijklmnñopqrstuvwxyzáéíóú";
      especiales = "8-9-32-37-38-46-164";
      teclado_especial = false;
      for (var i in especiales) {
          if (key == especiales[i]) {
              teclado_especial = true;
              break;
          }
      }
      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
          return false;
      }
  }

  /*FIN DE VALIDACION DE LETRAS NUMEROS PALABRAS*/
  /*-------INICIO DE CAMBIAR COLOR A LOS IMPUT*/
  $(function(){
      $("#rol").click(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('rol').value;
          if (capturado>0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#nombre").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('nombre').value;
          if (capturado.length > 2) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#apellidop").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('apellidop').value;
          if (capturado.length > 3 && capturado.length <15) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#apellidom").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('apellidom').value;
          if (capturado.length > 3 && capturado.length <15) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#email").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('email').value;
          if (capturado.length > 5) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#cel").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('cel').value;
          if (capturado.length == 10) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#facebook").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('facebook').value;
          if (capturado.length >=6) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#twitter").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('twitter').value;
          if (capturado.length >=6) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#dia").click(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('dia').value;
          if (capturado>0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#mes").click(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('mes').value;
          if (capturado>0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#año").click(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('año').value;
          if (capturado>0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#sexo").click(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('sexo').value;
          if (capturado>0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#talla").click(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('talla').value;
          if (capturado>0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#habilidades").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('habilidades').value;
          if (capturado.length > 2) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#hobbies").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('hobbies').value;
          if (capturado.length > 2) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#password").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('password').value;
          if (capturado.length > 0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });

      $("#rpassword").keyup(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturado = document.getElementById('rpassword').value;
          if (capturado.length > 0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });


  });/*CIERRE DE LA FUNCION*/ 

   

    </script>
  </body>
  </html>