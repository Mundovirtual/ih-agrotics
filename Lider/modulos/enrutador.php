<?php 
	class enrutador{
		public function cargarVista($vista){
 			
			switch ($vista) {
			    case "1": 
			        include_once("view/MiPerfil.php");      
			        break;
			    case "2": 
			        include_once("view/RegistroProyecto.php");			         
			        break;
			    case "3": 
			        include_once("view/proyecto.php");			         
			        break;
		        case "4": 
			        include_once("view/solicitudes.php");			         
		        	break;
		        case "5": 
			        include_once("view/ColabSolicitudesAceptadas.php");			         
		        	break;
		        case "6": 
			        include_once("view/CatalogoProyectos.php");			         
		        	break;
		        case "7": 
			        include_once("view/ColbSolicitudesEnviadas.php");			         
		        	break;
			    case "error":
			    	include_once("view/".$vista.".php");
			    	break;	
			    default:	
					include_once("view/error.php");
			}

		}
		
		public function validarGET($variable){ 
			if (empty($variable)) { 
				 include_once("index.php");

			}
			else{
				return true;
			}
		} 
	}


?>