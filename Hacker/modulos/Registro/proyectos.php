<?php 
include_once "../../../class/RegistroHackerP.php";
session_start();
 
 
$vistadeProyectos= new RegistroProyHack(); 
$ver=$vistadeProyectos->BuscarProyectos();
 
$i=1; 
$tabla=""; 

 foreach ($ver as $key) {
	 	  $inf='<button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#Detalles\" onclick=\"DetallesProyecto('."'".$key['8']."','".$key['9']."','".$key['10']."','".$key['11']."','".$key['12']."','".$key['1']."','".$key['2']."','".$key['3']."','".$key['4']."','".$key['5']."'".')\"><i class=\"fas fa-plus-circle\"></i>Detalles</button>' ;    
		 $solicitar='<button class=\"btn btn-success\" data-toggle=\"modal\" onclick=\"Registrar('."'".$_SESSION["idUserHacker"]."','".$key['7']."'".')\">Participar</button>';           
              
	 	$tabla.='{
					  "Numero":"'.$i.'",
					  "NombreLider":"'.$key['1'].'",
					  "Equipo":"'.$key['6'].'",
					  "proyecto":"'.$key['8'].'",
					  "Vertical":"'.$key['10'].'",					  
					  "Mas":"'.$inf .'",					  
					  "solicitar":"'. $solicitar.'" 
				},';
 
		 	$i++;	

	 }	

 
$tabla= substr($tabla,0, strlen($tabla)-1); 
echo '{"data":['.$tabla.']}';  

 ?>
 
 