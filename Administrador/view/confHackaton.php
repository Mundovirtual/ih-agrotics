 <?php
 include_once("../modulos/login/security.php");    
 include_once("../class/Hackaton.php"); 
 include_once("../class/Vertical.php");
 ?>    
<div class="container">
	<h1 align="center">Configuración  de Ediciones</h1>     
</div>
 <div align="right">
	<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalConfiguraciones">		Nuevo
	</button>
</div>
 
<body>
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10 table-responsive">
			<table class="table table-hover" id="TablaConfiguracion">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Edicion</th> 
			      <th scope="col">Fase</th>
			      <th scope="col">Equipos finalistas</th> 
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
	       	<form id="ConfiguracionForm">
			<div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text">Hackaton</label>
			  </div>
			  <select class="custom-select" id="Hackaton" name="Hackaton"> 
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
		 	 	<div>

		 	 		<?php  
			    	$Vertical= new Vertical();
			    	$mostrarFases=$Vertical->mostrarFases(); 
			    	$i=1;
			    	foreach ($mostrarFases as $key) {
			    		if ($i==1) {?>
				    		<div>		  	
						      <div class="input-group align-content-center">
						        <div class="input-group-prepend">
						          <div class="input-group-text"><?php echo $key['1']; ?></div>
						        </div>
						        <input type="text" class="numero form-control col-sm-3 " placeholder="Equipos Finalistas" id="<?php echo $key['0']; ?>" name="<?php echo $key['0']; ?>"step="1"  value="No aplica" readonly >
						      </div>
						    </div>
						    <hr> 
				    		<?php 			
			    		}else{?>
				    		<div>		  	
						      <div class="input-group align-content-center">
						        <div class="input-group-prepend">
						          <div class="input-group-text"><?php echo $key['1']; ?></div>
						        </div>
						        <input type="text"  class="numero form-control col-sm-3 " placeholder="Equipos Finalistas" id="<?php echo $key['0']; ?>" name="<?php echo $key['0']; ?>"step="1"  min="0">
						      </div>
						    </div>
						    <hr> 
				    	<?php

			    		}
 
			    	$i++;	 
			    	}
			     ?> 
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
 