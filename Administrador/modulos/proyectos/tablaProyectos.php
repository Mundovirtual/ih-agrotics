<?php 
include_once("../../class/proyectos.php");
	$index=new proyectos();
	$ver=$index->index();  
	//var_dump($ver);
 	$tabla="";
	$i=1;

   foreach ($ver as $key ) {
 	$detalles='<a data-toggle=\"modal\" data-target=\"#DetallesEquipo\"><i class=\"fa fa-eye fa-2x\" align=\"center\" onclick=\"detalles('."'".$key['0']."','".$key['8']."','".$key['1']."','".$key['2']."','".$key['3']."','".$key['9']."'".')\"></i></a>'; 

 	$eliminar='<button type=\"button\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\" data-target=\"#EliminarEquipos\" onclick=\"eliminar('."'".$key['0']."'".')\"></button>'; 
  
  	$tabla.='{
				  "Num":"'.$i.'",
				  "Equipo":"'.$key['4'].'",
				  "Vertical":"'.$key['6'].'", 
				  "proyecto":"'.$key['5'].'" ,
				  "Detalles":"'.$detalles.'" ,
				  "delete":"'.$eliminar.'"
			},';
 
 	$i++;	
}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 
 
 
?>  