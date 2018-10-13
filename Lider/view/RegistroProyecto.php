<<<<<<< HEAD
<?php 
	require_once "modulos/RegistroProyectos/Registro.php";

 ?>

<div class="row justify-content-center" id="RegistrarProyecto">
=======
<div class="row justify-content-center">
>>>>>>> parent of 1830afc... Lider registro proyectos
	 	<div class="col-md-10">
	 	<div class="card center-block">
		<h3 class="card-header primary-color bg-dark text-white"><i class="fas fa-plus-circle"></i> Registro proyecto</h3>
		<div class="card-body">
		<form method="POST" id="proyecto">
			<div class="row">
				<div class="col-md-6">
					<label for="#" class="label-control">Equipo</label>
				    <input type="text" class="form-control" name="equipo" id="equipo">
				</div>
				<div class="col-md-6">
					<label for="#" class="label-control">Eslogan</label>
				    <input type="text" class="form-control" name="eslogan">
				</div>
			</div>
			<div class="form-group">
				    <label for="#" class="label-control">Nombre Proyecto</label>
				    <input type="text" class="form-control" name="proyecto">
			</div>

			<div class="form-group">
				    <label for="#" class="label-control">Descripción</label>
				    <textarea class="form-control" name="descripcion"></textarea>
			</div>

			<div class="form-group" id="registrar">
				<div class="row col-md-8">
					<label for="#" class="label-control">Vertical</label>
					<select class="form-control" name="vertical" id="vertical">
						<option selected="" value="0">Seleccionar un vertical</option>
						 <option>Uno</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="row col-md-12">
					<div id="mensaje">
					
		            </div>
				</div>
			</div>
			<div class="form-group text-right">
				<button class="btn btn-primary" type="submit" id="registro"><i class="fas fa-sign-out-alt"></i> Registrar Proyecto</button>
			</div>
		</form>			 
		</div>
	    </div>
	    </div>
	 </div>