<?php
   class enrutador{
   	public function Vista($vista){
   		switch ($vista) {
   			case "1":
               include_once("LiderProyecto/mi_perfil.php");
   				break;
   			case "2":
               include_once("LiderProyecto/registro_proyecto.php");
   				break;
   			case "3":
               include_once("LiderProyecto/estado_proyecto.php");
   				break;
   			case "4":
               include_once("LiderProyecto/solicitudes.php");
   				break;
   			
   			default:
   				# code...
   				break;
   		}

   	}

   	public function validarGet($variable){
   		if(empty($variable)){

   		}else{
   			return true;
   		}
   	}
  }


 ?>