<?php 
include_once("../../../class/proyecto_x_Jueces.php");
session_start();
$idJuez= $_SESSION['idUserJuez'];
	$index=new Calf_x_Juez();
	$ver=$index->index($idJuez);  
 
 	$tabla="";
	$i=1;

 
   foreach ($ver as $key ) {
 
  	$tabla.='{
				  "id":"'.$i.'",
				  "Equipo":"'.$key['0'].'",
				  "Proyecto":"'.$key['1'].'", 
				  "Vertical":"'.$key['2'].'" ,  
				  "Fase":"'."Fase ".$key['4'].'",
				  "Calificacion":"'.round($key['5'], 2).'"
			},';
 
 	$i++;	
}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 
 
 
?>  