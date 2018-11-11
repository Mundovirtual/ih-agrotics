<?php 
include_once("../../../class/proyectosJuez.php");
	
	if (isset($_POST['IdVertical'])) {
		$id=$_POST['IdVertical'];
		$index=new proyectos();
		$tabla="";
		$ver="";
		$i=1;  

		if ($id=='0') {
			$ver=$index->index();
		}
		else{
			$ver=$index->ProyectosXvertical($id);
		}
		foreach ($ver as $key ) {
		 	$detalles='<a data-toggle=\"modal\" data-target=\"#DetallesEquipo\"><i class=\"fa fa-eye fa-2x\" align=\"center\" onclick=\"detalles('."'".$key['0']."','".$key['8']."','".$key['1']."','".$key['2']."','".$key['3']."','".$key['9']."'".')\"></i></a>'; 

		 	$calificar='<button type=\"button\" class=\"btn btn-info fas fa-pen-square\" data-toggle=\"modal\" data-target=\"#CalificarProyecto\" onclick=\"verticalId('."'".$key['10']."'".')\"></button>'; 
		  
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

	}
 
?>  