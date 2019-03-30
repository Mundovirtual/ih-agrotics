<?php 
include_once 'principal/conexion/abrirconexion.php';
$con = new Conexion();

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                Menu principal
            </title>
            <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
            <link rel="shortcut icon" href="principal/imagenes/labsol/banner1b.jpeg" type="image/x-icon">
            <link href="principal/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="principal/fontawesome-free-5.3.1-web/css/all.min.css">
            
        </meta>
    </head>

<body> 
        <!--Menu-->
        <div class="row">
            <div class="col-md-12" >
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <img class="img-responsive" src="principal/imagenes/esalud/iheb.png" width="130"/>    
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 40%;" >
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                       <a class="navbar-brand" href="index.php">
                          <i class="fas fa-sign-in-alt"></i>
                          Inicio
                       </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="principal/innovaweekend.php">
                            <i class="fas fa-file-alt"></i>
                            Innovaweekend
                            <span class="sr-only">(current)</span>
                        </a>
                      </li>
                       
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="menuu" data-toggle="dropdown" href="">
                            <i class="far fa-address-book"></i>
                             Innovahack
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuu">
                             <a class="dropdown-item" href="principal/agrotecnologias.php">1° Edición: Agrotecnologías</a> 
                             <a class="dropdown-item" href="principal/esalud.php">2° Edición: eSalud</a> 
                        </div>
                    </li>
                      
                      <li class="nav-item">
                          <a class="nav-link" href="principal/Agenda.php">
                              <i class="far fa-address-book">
                              </i>
                              Agenda
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="principal/Lideres.php">
                              <i class="fas fa-user-circle"></i>
                              Lideres
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="principal/miperfil.php">
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

        <!--Fin Menu--> 

        <div class="row">
            <div class="col-md-12">
                <div style="background-color:#E6E6E6;" align="center">
                  <img class="img-responsive img-fluid " src="principal/imagenes/esalud/logosconvocantes.png" width="850">  
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2">

            <?php                            
                $sql = "SELECT `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack` FROM `hackatonedicion` where `status`='1'";
                $resultado = $con->query($sql);
                $fechas= mysqli_fetch_array($resultado);
                if (!empty($fechas)) { 
                    $hoy=date('Y-m-d') ."\n"; 
                    $Flimit=$fechas['1']; 

                    if($Flimit>$hoy){
                     ?>
                        
                            <a href="principal/registro.php">
                                <img align="center" class="img-responsive mx-auto d-block img-thumbnail" src="principal/imagenes/esalud/registro.jpg" >
                            </a>
                                
                             
                     <?php
                    }                                  
                }
            ?>   

         </div>
            <div class="col-md-9">
                <h2 align="center">Verticales participantes</h2>
                <div id="cc" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="principal/imagenes/esalud/v1.png">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="principal/imagenes/esalud/v2.png">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="principal/imagenes/esalud/v3.png">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="principal/imagenes/esalud/v4.png">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="principal/imagenes/esalud/v5.png">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#cc" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#cc" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-md-1"> 
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-dark">
                            Aliados estratégicos
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class=" container-fluid col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-responsive" src="principal/imagenes/labsol/Logo PTLC_V1.jpg" width="200" height="100">
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive " src="principal/imagenes/labsol/logo_fich_unl.png" width="300" height="50">
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive" src="principal/imagenes/labsol/Logo_SF2018_2(1).png" width="200" height="150">
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive" src="principal/imagenes/labsol/LABSOL1/Innovation Labs Network Logo.png" width="200" height="120">
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive" src="principal/imagenes/labsol/LABSOL1/LogoUAZ.jpg" width="170" height="130">
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
        <hr>
         
         <!--Footer-->
           <div class="row" style="background-color: #000;color: white; ">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <img  class="img-responsive img-fluid" src="principal/imagenes/labsol/iwpngblue.png" width="190"  height="100"></img>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12" >
                                <h2>Participación</h2>
                                <span>
                                    Contaremos con una gran variedad de mentores jueces e invitados especiales.
                                </span>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                 <h5>Equipo de mentores</h5>
                                <p>
                                Seras asesorado por mentores con gran experiencia en las diferentes areas...
                                </p>
                                </div>
                            <div class="col-md-6">
                                <h5>Invitados especiales y conferencistas</h5>
                                <p>
                                   <ul>
                                       <li>Francisco Neri, Especialista en desarrollo de proyectos; Nearsof</li>
                                       <li>Héctor Benitéz, Especialista en desarrollo de proyectos, Nearsoft</li>
                                       <li>Sergio Camacho, Director del Laboratorio de Innovación del ITESM Campus Monterrey</li>
                                       <li>Rafael Echeverría, Coordinador del Hackaton Agro de Tabasco</li>
                                   </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-dark">
                            Innovación
                        </h3> 
                    </div>
                </div>
                <div class="row col-md-12" align="center">
                    <div class="col-md-3">
                        <p class="text-center">
                            <i class="fas fa-bolt fa-2x">
                            </i>
                        </p>
                        <blockquote class="blockquote">
                            <h6>
                                <p class="mb-0">
                                 El corazón y el alma de la empresa es la creatividad y la innovación.
                                 </p>
                            </h6>
                            <footer class="blockquote-footer">
                              <cite> Bob Iger</cite>
                            </footer>
                        </blockquote> 
                    </div>
                    <div class="col-md-3">
                        <p class="text-center">
                            <i class="fas fa-bolt fa-2x">
                            </i>
                        </p>
                        <blockquote class="blockquote">
                           <h6>
                                <p class="mb-0">
                                La innovación es lo que distingue a un lider de los demas.
                                </p>
                           </h6>
                            <footer class="blockquote-footer">
                              <cite>Steve Jobs</cite>
                            </footer>
                        </blockquote> 
                    </div>
                    <div class="col-md-3">
                        <p class="text-center">
                            <i class="fas fa-bolt fa-2x">
                            </i>
                        </p>
                        <blockquote class="blockquote">
                            <h6>
                                <p class="mb-0">
                                La persistencia es muy importante. No debes renunciar a menos que te veas obligado a hacerlo.
                                </p>
                            </h6>
                            <footer class="blockquote-footer">
                                <cite>Elon Musk</cite>
                            </footer>
                        </blockquote> 
                    </div>
                    <div class="col-md-3">
                        <p class="text-center">
                            <i class="fas fa-bolt fa-2x">
                            </i>
                        </p>
                        <blockquote class="blockquote">
                            <h6>
                                <p class="mb-0">
                               La innovación es la herramienta especifica del emprendimiento.
                               </p>
                            </h6>
                            <footer class="blockquote-footer">
                                 <cite> Peter Druker</cite>
                            </footer>
                        </blockquote> 
                    </div>
                </div>
            </div>
            
        </div>
                
        <div class="row"  style="background-color: red;color: white; ">
            <div class="col-md-1">
            </div>   
            <div class="col-md-10">
                <p>
                    <h7>
                        <ul>
                            <li type="disc">¿Tienes una idea que aborde alguna de las verticales?</li>
                            <li type="disc">¿Cuentas con un equipo de trabajo?</li>
                            <li type="disc">¿Quieres ser parte de este gran evento?</li>
                        </ul>
                           Registrate, no te quedes con las ganas y acompañanos en esta gran oportunidad.
                    </h7>
                </p>
            </div> 
            <div class="col-md-1">
            </div>   
        </div>
         <div class="row"  style="background-color: black;color: white; ">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <hr>
                        <h5>
                            InnovaHack
                        </h5>
                        <div class="form-group">
                            <span>
                               <h7 align="justify">No te quedes fuera de este gran evento, asiste con tu equipo y se parte de la innovación</h7>
                            </span>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <hr>
                        <h5>
                            Contáctanos
                        </h5>
                        <span>
                             
                            Avenida de la Juventud #504,col.Barros Sierra, C.P.98090 Zacatecas,Zac.
                        </span>
                        <h7>
                            <div class="form-group">
                                <span>
                                    <a href="#">
                                        <i class="fas fa-phone-volume">
                                        </i>
                                        (492)921 28 16
                                    </a>
                                    y 921 30 18 ext 1516
                                </span>
                            </div>
                            <div class="form-group">
                                <span>
                                    <i class="far fa-envelope">
                                    </i>
                                    labsol@cozcyt.gob.mx
                                </span>
                            </div>
                        </h7>
                    </div>
                    <div class="col-md-4">
                        <hr>
                        <h5>
                            Mapa
                        </h5>
                        <span>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.1237548223157!2d-102.5806774990537!3d22.76078814452632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824e5e36e6fae5%3A0xbb92c4708de888e0!2sAv.+de+la+Juventud+504%2C+Zona+A%2C+La+Encantada%2C+98090+Zacatecas%2C+Zac.!5e0!3m2!1ses!2smx!4v1551412372458" width="300" height="150" frameborder="1" style="border:0" allowfullscreen></iframe> 
                        </span>
                    </div>
                </div>
            </div>
        </div>
         <!--fin Footer-->           
    </div>


    </div>
</body>

 
</html>
 <script src="principal/js/jquery-3.3.1.min.js"></script>
<script src="principal/js/bootstrap.min.js">
</script>