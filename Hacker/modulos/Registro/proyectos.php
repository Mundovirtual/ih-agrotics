<?php
include_once("../../../login/securityHacker.php");  
include_once "../../../class/RegistroHackerP.php";
  
$vistadeProyectos= new RegistroProyHack(); 
$ver=$vistadeProyectos->BuscarProyectos();
 
 /*Validar Fechas*/ 
$FinRegistro=$vistadeProyectos->validarFecha();

$fechalimite='0';
if (!empty($FinRegistro)) {
	
	$hoy=date('Y-m-d') ."\n"; 
	$Flimit=$FinRegistro['0']['1'];

	if($hoy > $Flimit){
		$fechalimite='1';
	} 
}
 

$i=1; 
$tabla=""; 

 foreach ($ver as $key) {
	 	  $inf='<button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#Detalles\" onclick=\"DetallesProyecto('."'".$key['8']."','".$key['9']."','".$key['10']."','".$key['11']."','".$key['12']."','".$key['1']."','".$key['2']."','".$key['3']."','".$key['4']."','".$key['5']."'".')\"><i class=\"fas fa-plus-circle\"></i>Detalles</button>' ;    
		 
		if ($fechalimite==0) {
		 	$solicitar='<button class=\"btn btn-success\" data-toggle=\"modal\" onclick=\"Registrar('."'".$_SESSION["idUserHacker"]."','".$key['7']."'".')\">Participar</button>';  
		 } 
		 else{
		 	$solicitar='<button class=\"btn btn-success\" data-toggle=\"modal\" disabled=\"true\" onclick=\"Registrar('."'".$_SESSION["idUserHacker"]."','".$key['7']."'".')\">Participar</button>';  
		 }
		          
              
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
 
 