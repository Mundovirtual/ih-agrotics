 
<?php 
include_once("../login/securityLider.php");   
require_once("../class/comunidad.php");

$id=$_SESSION['idUserLider'];
$Comunidad = new comunidad();
$ver =$Comunidad->mostrarDatos($id);

 ?>
<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<h3 class="card-header text-center bg-dark text-white">Mi perfil</h3>
				<div class="card-header">
					<div class="text-center">
						<i class="fas fa-user-circle fa-8x"></i>
					</div>

					<div class="form-group">
						<h3 class="text-center"><?php  echo $ver[0][1];?></h3>
					</div>
					<div class="row">	
						<button class="form-control btn btn-primary">Bienvenid@</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<button type="button" class="btn btn-success " onclick="EditarPerfil(<?php echo $ver[0][0]; ?>)" id="EditarPerfil" name="EditarPerfil"><i class="fa fa-pencil-square"></i> Editar</button>
				</div>
				<div class="col-md-4"></div>
				
			</div>
			
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<div class="progress">
				   <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"   aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>		
			    </div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					
					<div class="form-group">
						<h2>Datos personales</h2>
					</div>

					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
					  <div class="col-10">
					    <input type="text" class="form-control bg-white" name="nombre" id="nombre" value="<?php  echo $ver[0][1]
					    .' '.$ver[0][2]?>" >
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Playera</label>
					  <div class="col-4">
					    	  <input type="email" class="form-control bg-white"  id="TallaPlayera" name="TallaPlayera" value="<?php echo $ver[0][6];?>" >
					  </div>
		 			</div>
		 			<form id="formulario_perfil">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">E-mail</label>
					  <div class="col-10">
					    <input type="email" class="form-control bg-white"  id="Correo" name="Correo" value="<?php echo $ver[0][3];?>" >
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Celular</label>
					  <div class="col-10">
					    <input type="tel" class="form-control bg-white" id="cel" name="cel" value="<?php echo $ver[0][5];?>" >
					  </div>
					</div>
 
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Contraseña</label>
					  <div class="col-10">

					  	<div class="input-group-prepend">
						   	 <button type="button" class="button fa fa-eye" id="MostrarPsw" name="MostrarPsw"></button>		 
						 	 <input type="password" class="form-control" id="Contrasena" name="Contrasena" placeholder="Escribe su nueva contraseña" value="<?php echo base64_decode($ver[0][4]);?>"></button></input>			
						</div>
 
					  </div>
					</div> 
					</form>
 					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Institución</label>
					  <div class="col-10">
					    <input type="email" class="form-control bg-white"  id="Institución" name="Institución" value="<?php echo $ver[0][8];?>" >
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Carrera</label>
					  <div class="col-10">
					    <input type="email" class="form-control bg-white"  id="Carrera" name="Carrera" value="<?php echo $ver[0][7];?>" >
					  </div>
					</div>				
				</div>
			</div>
			
			 
		</div>
	</div>
<script type="text/javascript" src="modulos/perfil/miperfil.js"></script>