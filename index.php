<?php 
include_once 'principal/conexion/abrirconexion.php'; 
$con = new Conexion();

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                Innovaweekend
            </title>
            <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
            <link rel="shortcut icon" href="principal/imagenes/labsol/banner1b.jpeg" type="image/x-icon">
            <link href="principal/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="principal/fontawesome-free-5.3.1-web/css/all.min.css">
            <style>
				.carousel-control-prev-icon {
				    background-color: black;				    
					  height: 30px;
					  width: 30px;
					  outline: white;
					  background-size: 100%, 100%;
					  border-radius: 50%; 
					  border-top: 100%;
					  margin-right: 70%;
				} 
				.carousel-control-next-icon {
				    background-color: black;				    
					  height: 30px;
					  width: 30px;
					  outline: white;
					  background-size: 100%, 100%;
					  border-radius: 50%; 
					  border-top: 100%;
					  margin-left: 70%
				} 
				</style>
            
        </meta>
    </head>


<body> 
        <!--Menu-->
        <div class="row ">
            <div class="col-md-12" >
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <img class="img-responsive img-fluid" src="img/dedica/challenge.png" width="52" heigth="20"/>    
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
                <div style="background-color:#FFFFFF;" align="center"> 
                  <img class="img-responsive img-fluid " src="img/dedica/banner.png" width="750" >  
                </div>
            </div>
        </div>
        <hr>
        <div class="row container-fluid">
            <div class="col-md-2 col-sm-12 col-xs-2">
	            <?php                            
	                $sql = "SELECT `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack` FROM `hackatonedicion` where `status`='1'";
	                $resultado = $con->query($sql);
	                $fechas= mysqli_fetch_array($resultado);
	                if (!empty($fechas)) { 
	                    $hoy=date('Y-m-d') ."\n"; 
	                    $Flimit=$fechas['1']; 

	                    if($Flimit>$hoy){
	                     ?>
                               <h1>Registra tu equipo</h1>
	                            <a href="principal/registro.php">
                                <h3>Da clik aquí</h3>
                              </a>
	                                
	                             
	                     <?php
	                    }                                  
	                }
	            ?>   

        	</div >
            <div class="col-md-9 col-sm-12 col-xs-10 ">
                <h2 align="center">Verticales participantes</h2>
                <div id="cc" class="carousel slide " data-ride="carousel">
            	 <ol class="carousel-indicators">
				    <li data-target="#cc" data-slide-to="0" class="active"></li>
				    <li data-target="#cc" data-slide-to="1"></li>
				    <li data-target="#cc" data-slide-to="2"></li>
				    <li data-target="#cc" data-slide-to="3"></li>
				    <li data-target="#cc" data-slide-to="4"></li>
				 </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid mx-auto d-block" src="principal/imagenes/esalud/v1.png" width="100%" >
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid mx-auto d-block" src="principal/imagenes/esalud/v2.png" width="100%" >
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid mx-auto d-block" src="principal/imagenes/esalud/v3.png" width="100%" >
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid mx-auto d-block" src="principal/imagenes/esalud/v4.png" width="100%" >
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid mx-auto d-block" src="principal/imagenes/esalud/v5.png" width="100%" >
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid mx-auto d-block" src="principal/imagenes/esalud/D1.jpg" width="100%" >
                    </div>
                    <?php 
	                if (!empty($fechas)) { 
	                    $hoy=date('Y-m-d') ."\n"; 
	                    $Flimit=$fechas['1']; 

		                    if($Flimit>$hoy){
		                     ?>		   
		                     	<div class="carousel-item">
			                      <a href="principal/registro.php">
		                                <img align="center" class="img-responsive mx-auto d-block" src="principal/imagenes/esalud/registro.jpg" width="100%" >
		                           </a>
			                    </div>                              
		                     <?php
		                    }                                  
		                }
		            ?>   
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
        <div class="container-fluid">
        	<div class="row">
          		 <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="row">
                	<div class="col-xs-2 col-sm-2 col-md-2"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <h2 class="text-center text-dark">
                            <a href="principal/Lideres.php">Aliados estratégicos</a>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2">
                    </div>
                    <div class="col-xs-8 col-sm-5 col-md-8 "> 
                      <div class="row align-items-center">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div>
                               <img class="img-responsive img-fluid mx-auto d-block" src="img/dedica/dedicafundacion.png" vspace="10" width="200">
                          </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div>
                               <img class="img-responsive img-fluid mx-auto d-block" src="img/dedica/inovationlab.png" vspace="10" width="200">
                          </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div>
                               <img class="img-responsive img-fluid mx-auto d-block" src="img/dedica/challenge.png" vspace="10" width="90">
                          </div>
                        </div>
                         
                      </div> 
                    </div>                      
                    <div class="col-xs-2 col-md-2 col-sm-2">
                    </div>
                </div>
            </div>
       		 </div>
        </div>
        
        <hr>
        <?php 
          include_once("principal/fotter.php");
        ?> 
         <!--fin Footer-->           
    </div>


    </div>
</body>

 
</html>
 <script src="principal/js/jquery-3.3.1.min.js"></script>
<script src="principal/js/bootstrap.min.js">
</script>