 <?php
 include_once("../modulos/login/security.php");    
?>  
<div class="container">
	<h1 align="center">Proyectos</h1></br>  
</div>
 
<body>
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<table class="table table-hover" id="TablaProyectos">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Equipo</th> 
			      <th scope="col">Vertical</th>
			      <th scope="col">proyecto</th> 
			      <th scope="col">Detalles</th>
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


<!-- DetallesEquipo -->
<div class="modal fade" id="DetallesEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Datos Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       	<div class="form-row ">
		    <div class="col-md-12">
		      <label for="Descripcion">Descripcion</label>
		      <textarea type="text" class="form-control" id="DescripcionProyecto"  disabled="">		      	
		      </textarea> 
		    </div>
		    <div class="col-md-8">
		      <label for="Descripcion">Lider</label>
		      <input  type="text" class="form-control" id="lider"  disabled=""></input> 
		    </div>
		     <div class="col-md-4">
		      <label for="Telefono">Fecha de registro</label>
		      		<input type="text" class="form-control" id="RegistroProyecto" value="2/85/1985" disabled="">
		    </div>
		    <div class="row text-center">
			    <div class="col-md-6">
			    	<label for="Descripcion">E-mail</label>
		      		<input  type="text" class="form-control" id="email"  disabled=""></input> 
			    </div>
			    <div class="col-md-6">
			    	<label for="Descripcion">Telefono</label>
		      		<input  type="text" class="form-control" id="telefono"  disabled=""></input> 
			    </div>
			    

		    </div>

		    		     
	 	</div>

	   	<div class="form-row"> 
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					 <header class="text-center">Integrantes</header>
					<div id="TablaIntegrantes">
						
					</div>	  					     
				</div>
				<div class="col-md-1">
				</div>
			</div>	 
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button> 
      </div>
    </div>
  </div>
</div>

 
<!-- Eliminar -->	

<div class="modal fade" id="EliminarEquipos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-danger" id="ActualizarHack">Continuar</button>
      </div>
    </div>
  </div>
</div> 
 
 <script src="../modulos/proyectos/proyecto.js"></script>