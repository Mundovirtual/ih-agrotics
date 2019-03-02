	<?php 
	
	class Create_registro{
		    public function __construct(){
		       $this->rol  =  ucfirst( $_POST['rol']);
	           $this->nombre =utf8_decode(ucwords($_POST['nombre']));
		       $this->apellidos = utf8_decode(ucfirst($_POST['apellidop'])) . " " . utf8_decode(ucfirst($_POST['apellidom']));
		       $this->correo = mb_strtolower( $_POST['correo']);
		       $this->cel = $_POST['cel'];
		       $this->institucion =utf8_decode(ucwords( $_POST['institucion']));
		       $this->facebook = $_POST['facebook'];
		       $this->carrera =utf8_decode(ucwords( $_POST['carrera']));
		       $this->twitter = $_POST['twitter'];
		       $this->dia = $_POST['dia'];
		       $this->mes = $_POST['mes'];
		       $this->año = $_POST['año'];
		       $this->fecha  = $_POST['año'].'/'.$_POST['mes'].'/'.$_POST['dia'];
		       $this->sexo = $_POST['sexo'];
		       $this->talla = $_POST['talla'];
		       $this->habilidades =utf8_decode(ucfirst( $_POST['habilidades']));
		       $this->hobbies  =utf8_decode(ucfirst( $_POST['hobbies']));
		       $this->contrasena =base64_encode($_POST['contraseña']);
		    }

		    public function Create_registro(){
		    	if(!empty($_POST)){
		    		if(empty($this->rol)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Rol inválido</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($this->nombre)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Nombre inválido</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($_POST['apellidop'])){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Apellido paterno inválido</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($_POST['apellidom'])){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Apellido materno inválido</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($this->correo) || !filter_var($this->correo, FILTER_VALIDATE_EMAIL)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Correo inválido</strong>
                 			</div>
            			<?php

		    		}
		    		else if(empty($this->cel) || !is_numeric($this->cel) || strlen($this->cel) !=10){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Numero inválido</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($this->institucion)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Institución inválido</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($this->carrera)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Carrera inválida</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($this->dia)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Seleccionar fecha(Dia)</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($this->mes)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Seleccionar fecha(mes)</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($this->año)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Seleccionar fecha(año)</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($this->sexo)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong> Sexo invalido</strong>
                 			</div>
            			<?php
		    		}
		    		else if(empty($this->talla)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong>Sellecionar talla</strong>
                 			</div>
            			<?php
		    		}else if(empty($this->contrasena)){
		    			?>
                			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       			<strong>Constraseña invalida</strong>
                 			</div>
            			<?php
		    		}
		    		else{

		    			include 'esqueleto-crud.php';
		    			include("../../class/Hackaton.php"); 
		    			$Hack=new idHackaton();
		    			$MostrarHack=$Hack->mostrarDatosHackaton(); 
		    			$idHack= $MostrarHack[0][0];
		    			$registro = new registro();

		    			$sql = "INSERT INTO `comunidad` (`id`, `Nombre`, `Apellidos`, `E-mail`, `psw`, `Celular`, `Talla_Playera_idTalla_Playera`, `Carrera_id`, `Institucion_id`, `Facebook`, `Twitter`, `FechaNacimiento`, `Habilidades`, `Hobbies`, `Rol_idRol`, `Genero_idSexo`,`hackaton`) VALUES (NULL, '$this->nombre', '$this->apellidos', '$this->correo', '$this->contrasena', '$this->cel', '$this->talla', '$this->carrera', '$this->institucion', '$this->facebook', '$this->twitter', '$this->fecha', '$this->habilidades', '$this->hobbies', '$this->rol', '$this->sexo','$idHack')";
		     	 
		    	 		$validar=$registro->ValidarUsuario($this->nombre,$this->apellidos,$this->correo); 
 
		    	 		if (count($validar)==0) {
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
		    	 	}else{
		    	 		if ($validar[0][4] ==$idHack) {
			    	 		 ?>
		    				<div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-check"></i>
	                             <strong>Usuario ya registrado!</strong>
	                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                             <span aria-hidden="true">&times;</span>
	                             </button>
	                        </div>
		    				<?php
			    	 	}
		    	 	}

		    		}
		    	}
		    	 
		    	 
		    }



	}
	$Create = new Create_registro();
	$Create->Create_registro();
	?>