 <?php
 include_once("../modulos/login/security.php");    
 include_once("../class/Vertical.php");
?>  
<div class="container">
	<h1 align="center">Criterios de evaluación</h1></br>  
</div>
 
 <header>
 	<div class="d-flex"> 
 		<div class="col-md-11"> 			 
 		</div> 		 
		<div class="col-md-1">
			<div align="right">
				<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalRubricas">Nueva
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
			<table class="table table-hover" id="MostrarRubricas">
			  <thead>
			    <tr>
			      <th scope="col">#</th> 
			      <th scope="col">Vertical</th>
			      <th scope="col">Pregunta</th> 
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
	<div class="modal fade" id="ModalRubricas" tabindex="-1" role="dialog" aria-labelledby="Editar" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-plus-circle"></i>Registro de Criterios de evaluación</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form id="RegistrarEvaluacion">
		      	<div class="input-group mb-2"> 
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="Vertical">Vertical</label>
				  </div>
				  <select class="custom-select" id="idVerticalRubricas">
				  	<option selected value="s">Selecciona...</option>
				   <?php 
				  		$MostrarVertical=new Vertical();
				  		$mostrar=$MostrarVertical->mostrarDatos();
				  		foreach ($mostrar as $key) {?>
						<option value="<?php echo $key["0"];?>"><?php echo $key["2"];?></option>
				  		<?php	 
				  		}
				  	 ?>				     
				  </select>
				</div>	    
				<p class="font-weight-bold" align="center">Ingresa los criterios de evaluación</p>   	
			   <div class="container"> 	                  
	                <div class="form-group">  	                       
                      <div class="table-responsive">  
                           <table class="table table-bordered" id="dynamic_field">  
                                <tr>  
	                                 <td>
	                                 	<textarea type="text" rows="1" name="rubricas[]" placeholder="Criterio de evaluación" class="form-control name_list letras" /></textarea>
	                                 </td>  
	                                 <td>
	                                 	<button type="button" name="add" id="add" class="btn btn-success">+</button>
	                                 </td>  
                                </tr>  
                           </table>                             
                      </div>  	                     
	                </div>  
	           </div> 			  
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-success" onclick="registrar_rubricas()">Registrar</button>
	      </div>
	    </div>
	  </div>
	</div>

	 
	<!-- Editar -->
	<div class="modal fade" id="EditarRubricas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Editar Criterio de evaluación</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	<form>
		      	<div class="input-group mb-3"> 
				  <div class="input-group-prepend">
				    <label class="input-group-text" >Vertical</label>
				  </div> 
      				<input type="text" class="form-control" id="infoVertical" disabled>
				</div>

                <div class="form-group">  

                   <textarea id="cEvaluacion" type="text" rows="2"  placeholder="Criterio de evaluación" class="form-control name_list letras"></textarea>      
                 </div>  	                     
                              			  
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-success" onclick="Actualizar()">Actualizar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Eliminar -->	
 
	<div class="modal fade" id="EliminarRubricas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Eliminar</h5>	      
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
	        <button type="button" class="btn btn-danger" onclick="Eliminar()">Continuar</button>
	      </div>
	    </div>
	  </div>
	</div> 
 
  
<script src="../modulos/rubrica/rubrica.js"></script>
<script src="../js/letras.js"></script>
