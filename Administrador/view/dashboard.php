<?php 
 include_once("../modulos/login/security.php"); 
  include_once("../class/Hackaton.php");
  $hackaton=new Hackaton();
  $Mostrar=$hackaton->mostrarDatosHackaton();  
 ?>
<div class="row">
    <div class="col-md">
      <h1 class="text-center"><?php echo $Mostrar[0][1]; ?></h1>
    </div>  
</div>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
       <!--Proyectos-->
        <div class="card border-secondary mb-3"> 
          <div class="card-body"> 
              <div class="row">
                <div class="col-md-3">
                  <i class="fas fa-folder fa-5x"></i>
                </div>
                <div class="col-md-9 text-right">
                  <div id="ProyectosNumero" class="fa-3x"></div> 
                </div>
              </div>
          </div>
          <div class="card-footer text-justify text-center">
            <h4>Proyectos</h4>
          </div>
        </div>
    </div>
    <div class="col-md-3">
        <!--Participantes-->
      <div class="card border-secondary mb-3"> 
        <div class="card-body"> 
            <div class="row">
              <div class="col-md-3">
                <i class="fas fa-users fa-5x"></i>
              </div>
              <div class="col-md-9 text-right">
                <div id="ParticipantesNumero" class="fa-3x"></div> 
              </div>
            </div>
        </div>
        <div class="card-footer text-justify text-center">
          <h4>Participantes</h4>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <!--Mentores/jueces-->
        <div class="card border-secondary mb-3"> 
          <div class="card-body"> 
              <div class="row">
                <div class="col-md-3">
                  <i class="fas fa-chalkboard-teacher fa-5x"></i> 
                </div>
                <div class="col-md-9 text-right">
                  <div id="MentoresNumero" class="fa-3x"></div> 
                </div>
              </div>
          </div>
          <div class="card-footer text-justify text-center">
            <h4>Mentores/jueces</h4>
          </div>
        </div>
    </div>
    <div class="col-md-3">
    <!--Proyectos-->
        <div class="card border-secondary mb-3"> 
          <div class="card-body"> 
              <div class="row">
                <div class="col-md-3">
                  <i class="fas fa-user-secret fa-5x"></i>
                </div>
                <div class="col-md-9 text-right">
                  <div id="HackersNumero" class="fa-3x"></div> 
                </div>
              </div>
          </div>
          <div class="card-footer text-justify text-center">
            <h4>Hackers</h4>
          </div>
        </div>  
    </div>
  </div>
</div>

   <h2 class="display-5 text-center">Playeras</h2>
 
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
          <div class="propiedades card text-white" style="background-color: #588ec8">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3"> 
                  <i class="fas fa-tshirt fa-5x"> 
                  </i>
                </div>
                <div class="col-md-9 text-right">                                     
                  <div><h4>Hackers <span id="ChicaHacker"></span></h4></div>
                   <div><h4>Mentores <span id="ChicaMentores"></span></h4></div> 
                </div>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1 text-center" style="background-color: #588ec8">
              <span>CHICA</span>
            </a>
          </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
          <div class="propiedades card text-white" style="background-color: #41b95d">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <i class="fas fa-tshirt fa-5x"></i>
                </div>
                <div class="col-md-9 text-right">
                   <div><h4>Hackers <span id="MedianaHacker"></span></h4></div>
                   <div><h4>Mentores <span id="MedianaMentores"></span></h4></div> 
                </div>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-2 text-center" style="background-color: #41b95d">
              <span>MEDIANA</span>
            </a>
          </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
          <div class="propiedades card text-white" style="background-color: #eebe2f">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <i class="fas fa-tshirt fa-5x"></i>
                </div>
                <div class="col-md-9 text-right">
                   <div><h4>Hackers <span id="GrandeHacker"></span></h4></div>
                   <div><h4>Mentores <span id="GrandeMentores"></span></h4></div> 
                </div>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1 text-center" style="background-color: #eebe2f">
              <span>GRANDE</span>
            </a>
          </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
          <div class="propiedades card text-white bg-danger">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <i class="fas fa-tshirt fa-5x"></i>
                </div>
                <div class="col-md-9 text-right">
                   <div><h4>Hackers <span id="ExtraGrandeHacker"></span></h4></div>
                   <div><h4>Mentores <span id="ExtraGrandeMentores"></span></h4></div> 
                </div>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1 text-center" style="background-color: #dc3545">
              <span>EXTRA-GRANDE</span>
            </a>
          </div>
    </div>
</div>

 

<script src="../modulos/dashboard/dashboard.js"></script>