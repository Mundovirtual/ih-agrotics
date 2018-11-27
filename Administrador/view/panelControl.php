 <?php
 include_once("../modulos/login/security.php");    
  include_once("../class/Hackaton.php"); 
  $hackaton=new Hackaton();
  $Mostrar=$hackaton->mostrarDatosHackaton();  
?> 
<div class="container">
	<h1 align="center">Panel de Control</h1></br>  
</div>
 
 

<div class="card-header font-weight-bold font-italic" align="center">
   <?php
   	if (!empty($Mostrar)) {
   			?>
   			 <h3><?php echo $Mostrar[0][1]; ?></h3>
   			<?php
   		}
   	else{
   		?>
   			  <h1>Registra tu edición </h1> <a href="../view/index.php?cargar=1"> aqui &#128072;</a> 
   		<?php
   	}
    ?>  		 
</div>
<hr>


  

	<div id="AlertaConfiguracionPanel" class="alert alert-danger text-center" role="alert" style="display: none;" >
	  <h4 class="alert-heading">Configuración  Incompleta!!</h4>
	  <p>Favor de configurar todas las fases<a href="../view/index.php?cargar=3"><h2>👉 Ir</h2></a></p>

	  <hr>
	  <p class="mb-0">Asegurate de configurar las tres fases.</p>
	</div>
 
 

<div class="row" id="BottonPanel" style="display: none;">
	<div class="col-md-4">
		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
			  <div class="card-header bg-success" align="center"><h2>Primera Fase </h2><div align="center">Sin limite</div></div>

			  <div class="card-body"  align="center">
		 	 		<div id="BottonFaseUno"></div>
			  </div>
		</div>	
	</div>
	<div class="col-md-4">	
		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-info" align="center"><h2>Segunda Fase </h2><div align="center" id="NEquipoFaseDos"></div></div>
		  <div class="card-body"  align="center">
		  		<div id="BottonFaseDos"></div>
 
		  </div>
		</div>
	</div>
	<div class="col-md-4">

		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-primary" align="center"><h2>Tercera Fase</h2><div align="center" id="NEquipoFaseTres"></div></div>
		  <div class="card-body" align="center">
		      <div id="BottonFaseTres"></div>	   
		  </div>
		</div>
		 

	</div>
</div> 
 
 <script src="../modulos/panel_control/panel_control.js"> </script> 