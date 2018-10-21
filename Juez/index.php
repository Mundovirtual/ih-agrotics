 <?php
include_once("../login/security.php");   
  require_once("modulos/enrutador.php");   
   
    if (!isset($_GET['cargar'])) {
      $_GET['cargar']="";
      
  } 
   
 
?>
    <html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Juez/Mentor</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
  
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar mCustomScrollbar _mCS_1"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><div class="fas fa-user-circle fa-3x"></div>
            <h3 class="h3"><?php echo $_SESSION['nombre']; ?></h3><span class="text-danger">Juez / Mentor</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong><i class="fas fa-home"></i></strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">MENÚ</h5>

          <ul id="side-main-menu" class="side-menu list-unstyled">                  
          
            <li><a href="index.php?cargar=1" aria-expanded="false"> 
                <i class="fas fa-user-cog"></i> Mi perfil </a>
            </li>
            <h5 class="sidenav-heading">PROYECTOS</h5>                  
            <li>
                <a href="index.php?cargar=2" aria-expanded="false"> 
                  <i class="fas fa-chalkboard-teacher"></i>Evaluar</a>
            </li>
            <li>
                <a href="index.php?cargar=3" aria-expanded="false"><i class="fas fas fa-database"></i>Historial</a>
            </li>
          </ul>
        </div>
         
      </div>
    </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 149px; max-height: 233px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></nav>
    <div class="page ">
      <!-- navbar-->
      <header class="header sticky-top  ">
        <nav class="navbar">
          <div class="container-fluid ">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header">
                <a id="toggle-btn" href="#" class="menu-btn">
                  <i class="fas fa-bars"></i>
                </a>
                  <img src="../img/inovahackNavbar.png" height="20" width="100" align="center">
              </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center"> 
                <!-- Log out-->
                <li class="nav-item"><a href="../login/SesionClose.php" class="nav-link logout"> <span class="fas fa-power-off text-danger"></span> Salir</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
         <div class="right_col" role="main">
          
          <div>
          <?php 
              $enrutador = new enrutador();
                if ($enrutador->validarGET($_GET['cargar'])) { 
                    $enrutador->cargarVista($_GET['cargar']);
                 } 
                 else{
                    ?>
                    <div class="row justify-content-center" id="bienvenido">
                      <div class="col-md-10">
                        <div class="jumbotron jumbotron-fluid">
                          <div class="container">
                            <h1 class="display-4 text-center">Bienvenid@ <?php echo $_SESSION['nombre'];  ?></h1>
                            <p class="lead">Esta es tu portada principal, en donde podrás visualizar tu perfil, registro de proyecto, estado del proyecto donde podrás ver los integrantes de tu equipo </p>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <?php
                 }

            ?>
       </div>
        </div>
      </div></section>
      <footer class="main-footer ">
        <div class="container-fluid ">
          <div class="row">
            <div class="col-sm-10">
              <p>El mejor modo de predecir el futuro es inventándolo. –Alan Key</p>
            </div>
            <div class="col-sm-2 text-right">
              <p>Equipo LABSOL</p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
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