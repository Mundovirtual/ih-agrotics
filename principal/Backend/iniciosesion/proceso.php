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
    	$contenido = $con->query("SELECT `comunidad`.`id`,`comunidad`.`Nombre`,`comunidad`.`Apellidos`,`comunidad`.`E-mail`,`comunidad`.`Celular`,`comunidad`.`Rol_idRol` FROM `comunidad`  inner join `hackatonedicion` on `comunidad`.`hackaton`=`hackatonedicion`.`id` WHERE `comunidad`.`E-mail`='$u' and `comunidad`.`psw` = '$c' and `hackatonedicion`.`status`='1'"); 
      while($row = mysqli_fetch_array($contenido)) { 
      	$id=$row[`comunidad`.'id'];
        $nombre = utf8_encode($row[`comunidad`.'Nombre']);
        $apellidos = utf8_encode($row[`comunidad`.'Apellidos']); 
        $Rol = $row[`comunidad`.'Rol_idRol'];
      }
    	if($contenido->num_rows > 0){
        
        if($Rol == 5){
           session_start(); 
            $_SESSION['Lider'] = "Lider"; 
       			$_SESSION['idUserLider'] =$id ; 
             $_SESSION['NombreLider'] =$nombre ; 
            echo 5;
        }else
        if($Rol == 3){    
         session_start();        
            $_SESSION['Juez'] ="Juez";
            $_SESSION['idUserJuez'] =$id ; 
             $_SESSION['NombreJuez'] =$nombre ; 
            echo 3;
        }else if($Rol == 6){
             session_start();
           $_SESSION['Hacker'] = "Hacker";
     			  $_SESSION['idUserHacker'] =$id ; 
             $_SESSION['NombreHacker'] =$nombre ;  
            echo 6;
        }
    	}else{
    		?>
        
    		<div class="alert alert-warning alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
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