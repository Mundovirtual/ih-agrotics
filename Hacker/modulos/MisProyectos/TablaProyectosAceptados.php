<?php 
 include_once("../../../login/securityHacker.php"); 
include_once "../../../class/MisProyectos.php"; 
$id=$_SESSION['idUserHacker'];
$Proyectos = new MisProyectos(); 
$ver=$Proyectos->SolicitudesAceptados($id);
 
$i=1; 
$tabla=""; 

 foreach ($ver as $key) {

   		 $inf='<button class=\"btn btn-info fas fa-plus-circle\" data-toggle=\"modal\" data-target=\"#DetallesLider\" onclick=\"Detalles('."'".$key['9']."','".$key['11']."','".$key['4']."','".$key['3']."','".$key['6']."','".$key['5']."'".')\">  </button>' ;  

		 $Eliminar='<button class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\" data-target=\"#ConfirmarEliminar\" onclick=\"SolicitudEliminar('."'".$_SESSION["idUserHacker"]."','".$key['15']."'".')\"></button>';           
              
	 	$tabla.='{
					  "Numero":"'.$i.'",
					  "NombreLider":"'.$key['2'].'",
					  "Equipo":"'.$key['7'].'",
					  "proyecto":"'.$key['8'].'",
					  "Vertical":"'.$key['12'].'",					  
					  "Mas":"'.$inf .'",					  
					  "Eliminar":"'. $Eliminar.'" 
				},';
 
		 	$i++;	

	 }	

 
$tabla= substr($tabla,0, strlen($tabla)-1); 
echo '{"data":['.$tabla.']}';  

 ?>
 