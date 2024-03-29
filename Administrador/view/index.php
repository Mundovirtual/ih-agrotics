 <?php

 include_once("../modulos/login/security.php");
  include_once("../modulos/enrutador.php");   
    if (!isset($_GET['cargar'])) {
      $_GET['cargar']="";
      
  } 
 
?>
    
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="description" content=""> 
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="robots" content="all,follow">
    <link rel="shortcut icon" href="../img/favicon.png">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.css">
         
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="../js/malihu/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">

    <!-- Font Awesome CSS-->
    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="../css/fontawesome/css/solid.css" rel="stylesheet"> 
    <!-- Popper js--> 
    <script src="../js/popper/popper.min.js"   crossorigin="anonymous"></script>    
    <!-- Alertyfy js-->
    <link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/alertify.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <script src="../js/jquery/jquery.min.js"></script>
    <!-- Data tables-->
    
    <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css">
    <script type="text/javascript" src="../js/DataTables/datatables.js"></script>
    <!--====================================DASBOARD======================================-->
    <link rel="stylesheet" href="../css/dasboard.css">
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><div class="fas fa-user fa-2x"></div>
            <h3 class="h3"><?php echo $_SESSION['IdAdmin']; ?></h2><span>Administrador</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>I</strong><strong class="text-primary">H</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <li><a href="../view/index.php" aria-expanded="false"> 
                <i class="fas fa-chart-bar"></i>Dashboard </a>
          </li>   
          <h5 class="sidenav-heading">Menu</h5>

          <ul id="side-main-menu" class="side-menu list-unstyled">                  
          
            <li><a href="../view/index.php?cargar=10" aria-expanded="false"> 
                <i class="fas fa-tachometer-alt"></i>Estado del Concurso </a>
            </li>                  
            <li>
                <a href="../view/index.php?cargar=11" aria-expanded="false"> 
                  <i class="fas fa-chalkboard-teacher"></i>Panel de control</a>
            </li>

           <li><a href="#Monitoreo" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-laptop"></i>Consultas </a>
              <ul id="Monitoreo" class="collapse list-unstyled ">                
                  <li><a href="../view/index.php?cargar=6">Proyectos</a></li>   
                  <li><a href="../view/index.php?cargar=7">Hackers</a></li>
                  <li><a href="../view/index.php?cargar=8">Jueces</a></li>
                  <li><a href="../view/index.php?cargar=9">Calificaciones</a></li>
              </ul>
            </li> 

            <li><a href="#Registros" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-plus"></i>Registros </a>
              <ul id="Registros" class="collapse list-unstyled ">
                <li><a href="../view/index.php?cargar=1">Hackaton</a></li>
                <li><a href="../view/index.php?cargar=2">Vertical</a></li>
                <li><a href="../view/index.php?cargar=3">Configuraciones</a></li>
                <li><a href="../view/index.php?cargar=4">Rubricas</a></li> 
              </ul>
            </li>


            <li>
              <a href="../view/index.php?cargar=5" aria-expanded="false"> 
                <i class="fa fa-bell"></i>Solicitudes</a>
            </li>
            <h5 class="sidenav-heading">Mantenimiento</h5> 
              <li><a href="../view/index.php?cargar=12"><i class="fa fa-user"></i>Mi perfil</a></li> 
          </ul>
        </div>
         
      </div>
    </nav>
    <div class="page ">
      <!-- navbar-->
      <header class="header sticky-top">
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid ">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div >
                <a id="toggle-btn"  href="#" class="menu-btn">
                  <i class="fas fa-bars"></i>
                </a>
                <a href="index.php">
                  <img src="../../img/dedica/challenge.png"  width="42" > 
                </a>  
              </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">  
                <img src="../../img/dedica/dedicafundacion.png"  width="72" align="center">
                &nbsp;&nbsp;
                <img src="../../img/dedica/inovationlab.png"  width="72" align="center">            
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                  <li class="nav-item"><a href="#" class="nav-link logout" data-toggle = "modal" data-target = "#cerrar"><span class="fas fa-power-off text-danger"></span> Salir</a></li><!--Se utiliza para salir del sistema-->  
                </ul>

              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="modal fade" id="cerrar">
      <div class="modal-dialog" role = "document">
        <div class="modal-content text-center text-warning">
          <div class="modal-body">
            <i class="fas fa-info-circle fa-5x"></i>
            <h1 class="modal-title text-center text-dark" id="cerrar">Estas seguro ?</h1> 
            <a class="btn btn-primary" href= "../modulos/login/SesionClose.php">si, Salir</a>
            <a class="btn btn-danger text-white" data-dismiss="modal">Cancelar</a>  
          </div>
        </div>
      </div>  
    </div>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
         <div class="right_col" role="main" >
          <div>
            <?php
              $enrutador = new enrutador();
              
              if ($enrutador->validarGET($_GET['cargar'])) { 
                    $enrutador->cargarVista($_GET['cargar']);
                 } 
                 else{
                    include_once("dashboard.php");

                 }
            ?>
           
          </div>

        </div>
      </div>
      </section> 
    </div>
    <!-- JavaScript files-->
    <script src="../js/Bootstrap/bootstrap.min.js"></script>
    <script src="../js/malihu/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/alertifyjs/alertify.js"></script> 

    <!-- Main File-->
    <script src="../js/front.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
 
  </body>
</html>