<?php 

include_once("../../class/Hackaton.php");
	$Hackaton=new Hackaton();
	$ver=$Hackaton->HackatonDatos();
 	$tabla="";
	$i=1; 
 foreach ($ver as $key) {
 
 	 $Editar='<button type=\"button\" class=\"btn btn-primary fas fa-edit\" onclick=\"ActualizarHackaton('."'".$key['0']."','".$key['1']."','".$key['2']."','".$key['3']."','".$key['4']."'".')\" data-toggle=\"modal\" data-target=\"#EditarHackaton\"></button>';

 	 if ($key['6']=='0') {
 	 	 $estado='<input type=\"radio\"style=\"width:20px;height:20px\"  name=\"ActivarHack\"  onclick=\"ActivarHackaton('."'".$key['0']."','".$key['1']."'".')\">';
 	 }else {
 	 	$estado='<input type=\"radio\"style=\"width:20px;height:20px\" checked=\"checked\" name=\"ActivarHack\"  onclick=\"ActivarHackaton('."'".$key['0']."','".$key['1']."'".')\">';

 	 }
 	 
 	$Eliminar='<button type=\"button\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#EliminarHackaton\" onclick=\"eliminarHackaton('."'".$key['0']."'".')\"></button>';

	 	$tabla.='{
					  "id":"'.$i.'",
					  "NombreHack":"'.$key['1'].'",
					  "Inicio":"'.$key['2'].'",
					  "FinRegProyectos":"'.$key['3'].'",
					  "FinHack":"'.$key['4'].'",					  
					  "Imagen":"'.$key['5'].'",					  
					  "Estado":"'.$estado.'",
					  "Editar":"'.$Editar.'",
					  "Eliminar":"'.$Eliminar.'"
				},';
 
		 	$i++;	
			}
$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}';  
 
 

 ?>