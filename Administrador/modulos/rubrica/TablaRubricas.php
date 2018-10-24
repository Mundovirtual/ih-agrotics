<?php 
include_once("../../class/rubricas.php");
	$rubricas=new rubricas();
	$ver=$rubricas->index(); 
 	$tabla="";
	$i=1;

   foreach ($ver as $key ) {
 	$Editar='<button type=\"button\" class=\"btn btn-success fas fa-edit\" data-toggle=\"modal\" data-target=\"#EditarRubricas\" onclick=\"EditarRubrica('."'".$key['0']."','".$key['2']."','".$key['1']."'".')\"></button>';
	$Eliminar='<button type=\"button\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#EliminarRubricas\" onclick=\"EliminarRubrica('."'".$key['0']."'".')\"></button>';
 	$tabla.='{
				  "Num":"'.$i.'",
				  "Vertical":"'.$key['2'].'",
				  "Pregunta":"'.$key['1'].'", 
				  "Editar":"'.$Editar.'" ,
				  "Eliminar":"'.$Eliminar.'" 
			},';
 
 	$i++;	
}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 
 

?>  