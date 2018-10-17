 
<?php 
require_once "../../../class/Hackers.php";
 
session_start(); 

	$Proyecto =new Hacker();
	$ver=$Proyecto->ConsultarProyecto($_SESSION['idUserLider']);
	$tabla="";
	
	if(!empty($ver)){
		
		$Solicitudes=$Proyecto->MostrarHackersPorAceptar($ver[0][0]); 
		$_SESSION['IdProyecto']=$ver[0][0]; 
		$i=1;
	
 	foreach ($Solicitudes as $key) {
 	$inf= '<button type=\"button\" class=\"btn btn-info fas fa-ellipsis-h\" data-toggle=\"modal\" data-target=\"#DetallesSolicitud\" onclick=\"Detalles('."'".$key[6]."','".$key[5]."','".$key[8]."','".$key[9]."','".$key[7]."'".')\"></button>'; 
 	$Aceptar='  <button class=\"btn btn-success fa fa-check\" data-toggle=\"modal\" data-target=\"#ConfirmarAceptar\" onclick=\"Aceptar('."'".$key[0]."'".')\"></button>';
 	$Eliminar=' <button class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\" data-target=\"#ConfirmarEliminar\" onclick=\"Eliminar('."'".$key[0]."'".')\"></button>';
 
	 	$tabla.='{
					  "id":"'.$i.'",
					  "Nombre":"'.$key['1']." ".$key['2'].'",
					  "Correo":"'.$key['3'].'",
					  "Cel":"'.$key['4'].'",
					  "Inf":"'.$inf.'",					  
					  "Aceptar":"'.$Aceptar .'",					  
					  "Eliminar":"'. $Eliminar.'" 
				},';
 
		 	$i++;	
			}
		$tabla= substr($tabla,0, strlen($tabla)-1); 
	}
	echo '{"data":['.$tabla.']}';  
 
 

 ?>
 