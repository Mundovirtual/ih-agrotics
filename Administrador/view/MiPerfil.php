 
<?php 
 	include_once("../modulos/login/security.php");    
	include_once "../class/MiPerfil.php"; 
	$id=$_SESSION['NombreAdmin'];
	$comunidad = new comunidad();
	$ver =$comunidad->mostrarDatos($id); 
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
						<h3 class="text-center"><?php echo $ver[0][1];?></h3>
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
					
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
					  <div class="col-10">
					    <input type="text" class="form-control bg-white" name="nombre" id="nombre" value="<?php  echo $ver[0][1];?>" >
					  </div>
					</div>
 					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Usuario</label>
					  <div class="col-10">
					    <input type="email" class="form-control bg-white"  id="Usuario" name="Usuario" value="<?php echo $ver[0][3];?>" >
					  </div>
					</div>
		 			 
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">E-mail</label>
					  <div class="col-10">
					    <input type="email" class="form-control bg-white"  id="Correo" name="Correo" value="<?php echo $ver[0][2];?>" >
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
		 			 				
				</div>
			</div>


		</div>
	</div>
<script type="text/javascript" src="../modulos/perfil/miperfil.js"></script>