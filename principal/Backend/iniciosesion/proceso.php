  <?php

   class proceso{
   	public function validacion(){
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   	if(empty($_POST["usuario"]) && empty($_POST["contra"])){
   		?>
   		<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
   			<strong>Rellenar los campos Usuario y Contraseña !</strong>
   			<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
   				<span aria-hidden = "true">&times;</span>
   			</button>
   			
   		</div>
   		<?php
   	}else
    	if(empty($_POST["usuario"])){
    		?>
    		<div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
              <strong> Rellenar el campo Usuario !</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <?php
    	}else
    	if(empty($_POST["contra"])){
    		?>
    		<div class="alert alert-danger alert-dismissibe fade show text-center" role = "alert"><i class="fas fa-times"></i>
    			<strong>Rellenar el campo Constraseña !</strong>
    			<button type="button" class="close" data-dismiss = "alert" aria-label = "Close">
    				<span aria-hidden = "true">&times;</span>
    			</button>
    			
    		</div>
    		<?php
    	}else
    	if(isset($_POST['usuario']) && isset($_POST['contra'])){
    		$usuario = $_POST['usuario'];
    		$contra = base64_encode($_POST['contra']);
    		$this->busqueda($usuario,$contra);
    	}
     }

    }/*Cierre del metodo validacion*/
    function busqueda($u,$c){
    	require_once '../../conexion/abrirconexion.php';

    	$con = new Conexion();
    	$contenido = $con->query("SELECT `id`,`Nombre`,`Apellidos`,`E-mail`,`Celular`,`Rol_idRol` FROM `comunidad` WHERE `E-mail`='$u' and `psw` = '$c'");
 
      while($row = mysqli_fetch_array($contenido)) { 
      	$id=$row['id'];
        $nombre = utf8_encode($row['Nombre']);
        $apellidos = utf8_encode($row['Apellidos']);
        $correo = $row['E-mail'];
        $cel = $row['Celular'];
        $Rol = $row['Rol_idRol'];
      }
    	if($contenido->num_rows > 0){
        if($Rol == 5){
       session_start();
       $_SESSION['activo'] = true;
 			 $_SESSION['idUserLider'] =$id ;
			 $_SESSION['Nombre'] = $nombre; 
			 $_SESSION['NombreApellido']=$nombre." ".$apellidos;
            echo 5;
        }/*else
        if($Rol == 3){
            session_start();
            $_SESSION['activo'] =true;
            $_SESSION['nombre'] =$nombre;
            $_SESSION['Apellidos'] = $apellidos;
            $_SESSION['correo'] = $correo;
            $_SESSION['cel'] = $cel;
            echo 3;
        }*/else if($Rol == 6){
            session_start();
       $_SESSION['activo'] = true;
 			 $_SESSION['idUserHacker'] =$id ;
 			 $_SESSION['Nombre'] = $nombre; 
			 $_SESSION['NombreApellido']=$nombre." ".$apellidos;
            echo 6;
        }
    	}else{
    		?>
        
    		<div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
               <strong> Datos incorrectos !</strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <?php
    	}//CIERRE DE ELSE
    }//CIERRE DE BUSQUEDA



  }/*Cierre de la clase*/
  $proce = new proceso();
  $proce->validacion();  
  ?> 