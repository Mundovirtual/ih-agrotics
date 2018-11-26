<?php
include_once("../../../login/securityJuez.php"); 
include_once("../../../class/proyectosJuez.php");
	if (empty($_SESSION['idUserJuez'])) { 
 	  echo  json_encode(array('Tabla'=>'0'));
	  session_destroy();
	}
	if (isset($_POST['IdVertical'])) {
		$id=$_POST['IdVertical'];
		$index=new proyectos();
		$idJuez= $_SESSION['idUserJuez'];
		$tabla="";
		$ver="";
		$i=1;  

		/*Fase activos*/
		$fases=$index->ConsultarFases();
 		$faseActivo=$fases['0']['0'];

		if ($id=='0') {
			$ver=$index->index($faseActivo);
		}
		else{
			$ver=$index->ProyectosXvertical($id,$faseActivo);
		} 
		foreach ($ver as $key ) {
		 	$detalles='<a data-toggle=\"modal\" data-target=\"#DetallesEquipo\"><i class=\"fa fa-eye fa-2x\" align=\"center\" onclick=\"detalles('."'".$key['0']."','".$key['8']."','".$key['1']."','".$key['2']."','".$key['3']."','".$key['9']."'".')\"></i></a>'; 

		 	$calificar='<button type=\"button\" class=\"btn btn-info fas fa-pen-square\" data-toggle=\"modal\" data-target=\"#CalificarProyecto\" onclick=\"verticalId('."'".$idJuez."','".$key['0']."','".$key['10']."','".$key['11']."','".$key['12']."'".')\"></button>';
		  
		  	$tabla.='{
						  "Num":"'.$i.'",
						  "Equipo":"'.$key['4'].'",
						  "Vertical":"'.$key['6'].'", 
						  "proyecto":"'.$key['5'].'" ,
						  "Detalles":"'.$detalles.'" ,
						  "calificar":"'.$calificar.'"
					},';
		 
		 	$i++;	
		}
		$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 

	}
 
?>  