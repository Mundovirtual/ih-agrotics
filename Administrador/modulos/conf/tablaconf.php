<?php 
include_once("../../class/configuracion.php");
$index= new configuracion(); 
$mostrar=$index->indexConfiguracion(); 
 	$tabla="";
	$i=1; 
 foreach ($mostrar as $key) {
  if ($i==1) {
  	$eliminar='<button type=\"button\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#EliminarConfiguraciones\" onclick=\"Eliminar('."'".$key['0']."'".')\"></button>';
 
	 	$tabla.='{
					  "id":"'.$i.'",
					  "NombreHack":"'.$key['2'].'", 
					  "fase":"'.$key['4'].'",
					  "limites":"'.'N/A'.'", 
					  "Eliminar":"'.$eliminar.'"
				},';
 
		 	$i++;
  }else {
  	$eliminar='<button type=\"button\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#EliminarConfiguraciones\" onclick=\"Eliminar('."'".$key['0']."'".')\"></button>';
 
	 	$tabla.='{
					  "id":"'.$i.'",
					  "NombreHack":"'.$key['2'].'", 
					  "fase":"'.$key['4'].'",
					  "limites":"'.$key['5'].'", 
					  "Eliminar":"'.$eliminar.'"
				},';
 
		 	$i++;

  }
 
 		
}
$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}';  
 
 

 ?>
 