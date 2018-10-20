	<?php 
	class Create_registro{
		    public function __construct(){
	           $this->nombre =utf8_decode(ucwords( $_POST['nombre']));
		       $this->apellidos =utf8_decode(ucwords( $_POST['apellidos']));
		       $this->correo = $_POST['correo'];
		       $this->contrasena =base64_encode($_POST['contraseña']);
		       $this->cel = $_POST['cel'];
		       $this->talla = $_POST['talla'];
		       $this->carrera =utf8_decode(ucwords( $_POST['carrera']));
		       $this->institucion =utf8_decode(ucwords( $_POST['institucion']));
		       $this->facebook = $_POST['facebook'];
		       $this->twitter = $_POST['twitter'];

		       $this->fecha  = $_POST['ano'].'/'.$_POST['mes'].'/'.$_POST['dia'];
		       $this->habilidades =utf8_decode(ucfirst( $_POST['habilidades']));
		       $this->hobbies  =utf8_decode(ucfirst( $_POST['hobbies']));
		       $this->rol  =  ucfirst( $_POST['rol']);
		       $this->sexo = $_POST['sexo'];
		    }

		    public function Create_registro(){
		    	include 'esqueleto-crud.php';
		    	$registro = new registro();
		    	$sql = "INSERT INTO `comunidad` (`id`, `Nombre`, `Apellidos`, `E-mail`, `psw`, `Celular`, `Talla_Playera_idTalla_Playera`, `Carrera_id`, `Institucion_id`, `Facebook`, `Twitter`, `FechaNacimiento`, `Habilidades`, `Hobbies`, `Rol_idRol`, `Genero_idSexo`) VALUES (NULL, '$this->nombre', '$this->apellidos', '$this->correo', '$this->contrasena', '$this->cel', '$this->talla', '$this->carrera', '$this->institucion', '$this->facebook', '$this->twitter', '$this->fecha', '$this->habilidades', '$this->hobbies', '$this->rol', '$this->sexo')";
		    		$resultado =  $registro->InsertarRegistro($sql);
		    			if($resultado){
		    				?>
		    				<div class="alert alert-success alert-dismissible fade show text-center" role="alert"><i class="fas fa-check"></i>
	                             <strong>Usuario registrado! ir a mi perfil para iniciar sesion</strong>
	                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                             <span aria-hidden="true">&times;</span>
	                             </button>
	                        </div>
		    				<?php
		    			}else {
		    				?>
		    				<div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
	                             <strong> Error al insertar registros!</strong>
	                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                             <span aria-hidden="true">&times;</span>
	                             </button>
	                        </div>
		    				<?php
		    				
		    			}
		    	 
		    }



	}
	$Create = new Create_registro();
	$Create->Create_registro();
	?>