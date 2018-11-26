 
<?php 
	include_once("../../class/tabla_Proyectos.php");
	$Equipos=new VistaEquipos(); 
	$CalEquipos=$Equipos->index();
 	$tabla="";
	$i=1;
  foreach ($CalEquipos as $key ) {
   
		 	$tabla.='{
						  "idT":"'.$i.'",
						  "Equipo":"'.$key['0'].'",
						  "Proyecto":"'.$key['1'].'",
						  "Lider":"'.$key['2'].'",
						  "Vertical":"'.$key['3'].'",
						  "Fase":"'."Fase ".$key['4'].'",
						  "Calificacion":"'.$key['5'].'"
					},';
	 
	 	$i++;	
	}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 
?>