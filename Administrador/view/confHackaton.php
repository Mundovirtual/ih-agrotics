 <?php
 include_once("../modulos/login/security.php");    
 include_once("../class/Hackaton.php"); 
 include("../class/Vertical.php");
 ?>    
<div class="container">
	<h1 align="center">Configuración  de Ediciones</h1>     
</div>
 
 <header>
 	<div class="d-flex"> 
 		<div class="col-md-1"></div>
	 	<div class="col-md-5"> 
		</div>
		<div class="col-md-6">
			<div align="right">
				<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalConfiguraciones">Nuevo
				</button>
			</div>			 
		</div>
	</div>
 </header>
<body>
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<table class="table table-hover" id="TablaConfiguracion">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Edicion</th>
			      <th scope="col">Vertical</th>
			      <th scope="col">Fase</th>
			      <th scope="col">Equipos</th>
			      <th scope="col">Editar</th>
			      <th scope="col">Eliminar</th>
			    </tr>
			  </thead>
			  <tbody>

			  </tbody>
			</table>
			
		</div>
		<div class="col-md-1">
			
		</div>
	</div>

</body>

	<!-- REGISTRO -->
	<div class="modal fade" id="ModalConfiguraciones" tabindex="-1" role="dialog" aria-labelledby="Editar" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-plus-circle"></i>Nueva Configuración </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	<form>
			<div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text">Hackaton</label>
			  </div>
			  <select class="custom-select" id="Hackaton" name="Hackaton" disabled="disabled"> 
			    <?php 
			    	$hackaton= new Hackaton();
			    	$verHackaton=$hackaton->mostrarDatosHackaton();
			    	foreach ($verHackaton as $key) {?>
			    		 <option value="<?php echo $key['0']; ?>"><?php echo $key['1']; ?></option>
			    	<?php	 
			    	}
			     ?> 
			  </select>
			</div>
			
			<div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text">Vertical</label>
			  </div>
			  <select class="custom-select" id="Vertical" name="Vertical">
			    <option selected value="s">Selecciona...</option>
				<?php 
			    	$Vertical= new Vertical();
			    	$verVertical=$Vertical->mostrarDatos(); 
			    	foreach ($verVertical as $key) {?>
			    		 <option value="<?php echo $key['0']; ?>"><?php echo $key['2']; ?></option>
			    	<?php	 
			    	}
			     ?> 
			  </select>
			</div>
			<div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text" >Fase</label>
			  </div>
			  <select class="custom-select" id="Fases" name="Fases">
			    <option selected value="s">Selecciona...</option> 
			    <?php  
			    	$mostrarFases=$Vertical->mostrarFases(); 
			    	foreach ($mostrarFases as $key) {?>
			    		 <option value="<?php echo $key['0']; ?>"><?php echo $key['1']; ?></option>
			    	<?php	 
			    	}
			     ?> 
			  </select>
			</div>
			<div>
		  
		      <div class="input-group">
		        <div class="input-group-prepend">
		          <div class="input-group-text">Equipos Limite</div>
		        </div>
		        <input type="number"  class="numero form-control col-sm-3 " id="nEquipos" name="nEquipos" step="1"  min="0">
		      </div>
		    </div>
				 		
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-success" id="GuardarHack" onclick="registrarconf()">Registrar</button>
	      </div>
	    </div>
	  </div>
	</div>

	 
	<!-- Editar -->
	<div class="modal fade" id="EditarConfiguraciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Editar Configuración</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
			  <form>			  	
			  	<div class="input-group mb-3"> 
			  		<div class="input-group-prepend">
			 		   <label class="input-group-text">Hackaton</label>
			  		</div>
				   <input type="text" class="form-control"  id="EditarHack" name="EditarHack" disabled>
				</div>
				<div class="input-group mb-3"> 
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="Vertical">Vertical</label>
				  </div> 
      				<input type="text" class="form-control"  id="EditarVertical" name="EditarVertical"  disabled>
				</div>
				<div class="input-group mb-3"> 
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="Fases">Fase</label>
				  </div>
				  <input type="text" class="form-control" id="EditarFase" name="EditarFase" disabled>
				</div>
				<div>
			      <label class="sr-only" ></label>
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <div class="input-group-text">Equipos Limite</div>
			        </div>
			        <input type="number"  class="numero form-control col-sm-3 " id="nEquiposEditar" name="nEquiposEditar" min="0" step="1" >
			      </div>
			    </div>
				 		
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-success" id="ActualizarHack" onclick="actualizar()">Actualizar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Eliminar -->	
 
	<div class="modal fade" id="EliminarConfiguraciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Eliminar Configuración</h5>	      
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    <div class="modal-body">	      		
		<h1>Estás a punto de eliminar</h2>

		Quiere proceder?
	      	
	    </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-danger" onclick="EliminarRegistro()">Continuar</button>
	      </div>
	    </div>
	  </div>
	</div>
<script src="../modulos/conf/conf.js"></script>
<script src="../js/letras.js"></script>
 