<?php 
include_once("../../../login/securityJuez.php");
include_once("../../../class/proyectosJuez.php");
 
	if (empty($_SESSION['idUserJuez'])) { 
 	  echo  json_encode(array('Tabla'=>'0'));
	  session_destroy();
	}

	$index=new proyectos();
	/*Validar fases activos*/
	$fases=$index->ConsultarFases();
 
	$ver=$index->index($fases['0']['0']);   
	$idJuez= $_SESSION['idUserJuez'];	
 	$tabla="";
	$i=1;   	
 
   foreach ($ver as $key ) {
  
 	$detalles='<a data-toggle=\"modal\" data-target=\"#DetallesEquipo\"><i class=\"fa fa-eye fa-2x\" align=\"center\" onclick=\"detalles('."'".$key['0']."','".$key['8']."','".$key['1']."','".$key['2']."','".$key['3']."','".$key['9']."'".')\"></i></a>'; 

 	$calificar='<button type=\"button\" class=\"btn btn-info fas fa-pen-square\" data-toggle=\"modal\" data-target=\"#CalificarProyecto\" onclick=\"verticalId('."'".$idJuez."','".$key['0']."','".$key['10']."','".$key['11']."','".$key['12']."'".')\"></button>';
  
  	$tabla.='{
				  "Num":"'.$i.'",
				  "Equipo":"'.$key['4'].'",
				  "Vertical":"'.$key['6'].'", 
				  "proyecto":"'.$key['5'].'" ,
				  "Detalles":"'.$detalles.'" ,
				  "calificar":"'.$calificar.'"
			},';
 
 	$i++;	
}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 
 
 
?>  