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
    <h3><?php echo $Mostrar[0][1]; ?></h3>
 	<div id="MostrarBotonesVerticales">
 		
 	</div>	
 		 
</div>

<div class="row">
	<div class="col-md-4">

		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-success" align="center">Primera Fase</div>
		  <div class="card-body"  align="center">
		     
		     <button id="faseUno" type="button" class="btn btn-success" ></button>

		  </div>
		</div>
	
	</div>
	<div class="col-md-4">
	
		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-info" align="center">Segunda Fase</div>
		  <div class="card-body"  align="center">
		   
		   <button id="faseDos" type="button" class="btn btn-success"></button>

		  </div>
		</div>
		 

	</div>
	<div class="col-md-4">

		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-primary" align="center">Tercera Fase</div>
		  <div class="card-body" align="center">
		      <button id="faseTres" type="button" class="btn  btn-success"></button>	   
			</div>
		</div>
		 

	</div>
</div> 
 
 <script src="../modulos/panel_control/panel_control.js"> </script>