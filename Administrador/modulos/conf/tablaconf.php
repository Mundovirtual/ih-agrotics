<?php 
include_once("../../class/configuracion.php");
$index= new configuracion(); 
$mostrar=$index->indexConfiguracion();

 	$tabla="";
	$i=1; 
 foreach ($mostrar as $key) {
 
 	$editar='<button type=\"button\" class=\"btn btn-success fas fa-edit\" data-toggle=\"modal\" onclick=\"editar('."'".$key['0']."','".$key['1']."','".$key['2']."','".$key['3']."','".$key['4']."'".')\" data-target=\"#EditarConfiguraciones\" ></button>';

 	$eliminar='<button type=\"button\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#EliminarConfiguraciones\" onclick=\"Eliminar('."'".$key['0']."'".')\"></button>';
 
	 	$tabla.='{
					  "id":"'.$i.'",
					  "NombreHack":"'.$key['1'].'",
					  "Vertical":"'.$key['2'].'",
					  "fase":"'.$key['3'].'",
					  "limites":"'.$key['4'].'",
					  "Editar":"'.$editar.'",
					  "Eliminar":"'.$eliminar.'"
				},';
 
		 	$i++;	
			}
$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}';  
 
 

 ?>
 