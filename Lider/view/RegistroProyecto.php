 <?php 
include_once("../login/securityLider.php");  
 include_once "../class/Proyectos.php";
 ?>

<div id="Cargarpagina">
	<div class="row justify-content-center" id="RegistrarProyecto"  style="display: none">
	 	<div class="col-md-10">
	 	<div class="card center-block">
		<h3 class="card-header primary-color bg-dark text-white"><i class="fas fa-plus-circle"></i> Registro proyecto</h3>
		<div class="card-body">
		<form method="POST" id="RegistroProyecto">
			<div class="row">
				<div class="col-md-6">
					<label for="#" class="label-control">Nombre del Equipo</label>
				    <input type="text" class="form-control" name="equipo" id="equipo">
				</div>	
				<div class="col-md-6" id="VerticalRegistrar">
					<label for="#" class="label-control">Vertical</label>
					<select class="form-control" name="vertical" id="vertical">
					<option  value="00">Seleccionar un vertical</option>
					<?php 
						$Vertical=new Proyecto();
						$verVertical=$Vertical->Verticales(); 
						foreach ($verVertical as $key) {
						?>
							 <option value="<?php echo $key['0']; ?>"><?php echo $key['2']; ?></option>
						<?php
					}
					 ?>
					
						
						
					</select>
				</div>
				

			</div>
			<div class="form-group">
				    <label for="#" class="label-control">Nombre Proyecto</label>
				    <input type="text" class="form-control" name="proyecto" id="proyecto">
			</div>

			<div class="form-group">
				    <label for="#" class="label-control">Descripción</label>
				    <textarea class="form-control letras" name="descripcion" id="descripcion"></textarea>
			</div>
			<div class="form-group text-right" id="BotonRegistrar">
				<button class="btn btn-primary" type="submit" id="registro"><i class="fas fa-sign-out-alt"></i> Registrar Proyecto</button>
			</div>
		</form>			 
		</div>
	    </div>
	    </div>
</div>

<div class="row justify-content-center" id="ProyectoRegistrado"  style="display: none">
	 
	 	 
		<div class="col-md-12">
			<h3 class="card-header primary-color bg-dark text-white"><i class="fas fa-plus-circle"></i> Proyecto Registrado</h3>
		</div>
		<div class="card-body">
		 
			<div class="row">
				<div class="col-md-12">
					<label class="label-control">Equipo</label>
				    <input type="text" class="form-control" name="Mostrarequipo" id="Mostrarequipo">
				</div>
						 
				<div class="col-md-12">
					    <label class="label-control">Nombre Proyecto</label>
					    <input type="text" class="form-control" name="Mostrarproyecto" id="Mostrarproyecto">
				</div>
   				<div class="col-md-12" id="Registrado" >
					<label for="#" class="label-control">Vertical</label>
				    <input type="text" class="form-control" name="MVertical" id="MVertical">
				</div>

				<div class="col-md-12">
					<label class="label-control">Asesoria</label>
				    <input type="text" class="form-control" name="MostrarAsesoria" id="MostrarAsesoria">
				</div>
 		  	
	 	 
		</div>
	 
	 </div>
</div>
</div>
<script src="../js/Validaciones.js"></script>
	 <script src="modulos/RegistroProyectos/Registro.js"></script>