 
<?php 
	include_once("../../../class/Proyectos.php");

	session_start();
	$Equipos=new Proyecto(); 	
	$CalEquipos=$Equipos->calificaciones_x_proyecto($_SESSION['idUserLider']);
 	$tabla="";
	$i=1;
  foreach ($CalEquipos as $key ) {
   
		 	$tabla.='{
						  "id":"'.$i.'",
						  "Fase":"'."Fase ".$key['0'].'", 
						  "Calificacion":"'.round($key['1'], 2).'"
					},';
	 
	 	$i++;	
	}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 
?>