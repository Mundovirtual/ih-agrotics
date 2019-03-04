 <?php
 include_once("../modulos/login/security.php");    
?>  
<div class="container">
	<h1 align="center">Tabla de proyectos</h1></br>  
</div>
 <header>
	<div class="input-group mb-3"> 
		<div class="input-group-prepend">
		<label class="input-group-text" for="VertEquipo">Vertical</label>
		</div>
		<div id="InsertVerticales">

		</div>
	</div>
  </header>
	<div class="row" id="Calificaciones" style="display: none;">
 		<div class="col-md-12 table-responsive">
			<table  id="TablaCalificaciones" class="table table-hover">
			  <thead>
			    <tr>
			      <tr>
				      <th scope="col">#</th>
				      <th scope="col">Equipo</th>
				      <th scope="col">Proyecto</th>
				      <th scope="col">Lider</th>
				      <th scope="col">Vertical</th>
				      <th scope="col">Fase</th>
				      <th scope="col">Calificación </th> 
				    </tr>
			    </tr>
			  </thead>		   
			  <tbody>
			  </tbody>
			</table>		
		</div>	 
	</div>	 
 
	<div class="row" id="Mostrar" style="display: none;">
	  
		<div class="col-md-4">
			<table class="table table-hover">
				<h2 align="center">Primera fase</h2>
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Equipo</th>
			      <th scope="col">Calificación</th> 
			    </tr>
			  </thead>
			  <tbody id="FaseUnoEquipos">
			     
			     
			  </tbody>
			</table>
		</div>
		<div class="col-md-4">
			<table class="table table-hover">
				<h2 align="center">Segunda fase</h2>
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Equipo</th>
			      <th scope="col">Calificación</th> 
			    </tr>
			  </thead>
			  <tbody id="FaseDosEquipos">
			     
			     
			  </tbody>
			</table>
		</div>
		<div class="col-md-4">
			<table class="table table-hover">
				<h2 align="center">Ganador</h2>
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Equipo</th>
			      <th scope="col">Calificación</th> 
			    </tr>
			  </thead>
			  <tbody id="FaseTresEquipos">
			   
			  </tbody>
			</table>
		</div>
	</div>
  <script src="../modulos/VistaEquipos/tabla_Proyectos.js"></script>
 