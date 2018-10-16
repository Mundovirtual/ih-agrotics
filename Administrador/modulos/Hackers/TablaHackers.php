<?php 

include_once("../../class/hacker.php");
	$Hacker=new Hacker();
	$ver=$Hacker->MostrarHacker(); 
 	$tabla="";
	$i=1; 
 foreach ($ver as $key) {
  
 	 	$Detalles='<a data-toggle=\"modal\" data-target=\"#DetallesHacker\"><i class=\"fa fa-eye fa-2x\" align=\"center\" aria-hidden=\"true\" onclick=\"DetallesHacker('."'".$key['7']."','".$key['6']."','".$key['9']."','".$key['10']."','".$key['8']."','".$key['11']."'".')\"></i></a>';


	$Editar='<button type=\"button\" class=\"btn btn-success fas fa-edit\" data-toggle=\"modal\" data-target=\"#EditarHacker\" onclick=\"editarDatos('."'".$key['0']."','".$key['3']."','".$key['4']."','".$key['2']."'".')\"></button>';	

	$eliminar='<button type=\"button\" class=\"btn btn-danger fa fa-trash\" data-toggle=\"modal\" data-target=\"#EliminarHackers\" onclick=\"Eliminar('."'".$key['0']."'".')\"> </button>';
 

	 	$tabla.='{
					  "id":"'.$i.'",
					  "Nombre":"'.$key['1'].'",
					  "Celular":"'.$key['4'].'",
					  "Email":"'.$key['2'].'",
					  "Detalles":"'.$Detalles.'", 
					  "Editar":"'.$Editar.'",
					  "Eliminar":"'.$eliminar.'"
				},';
 
		 	$i++;	
			}
$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}';  
 
 

 ?>