<?php 
 
	include_once("../../class/tabla_Proyectos.php");
	if (isset($_POST['idVertical'])) {

		$Equipos=new VistaEquipos();
		$vertical=$_POST['idVertical'];
		$todosEquiposFaseUno="";
		$FaseUno="";
		$FaseDos="";
		$FaseTres="";


		$mostrarFaseUno=$Equipos->EtapaUno($vertical);
		if (!empty($mostrarFaseUno)) {
			$i=1;
				foreach ($mostrarFaseUno as $key) {
				$FaseUno.=" <tr><th scope='row'>".$i."</th><td>".$key['0']."</td><td>".$key['1']."</td></tr>"; 
				$i++;
			}
		}
		else{
			$FaseUno=" <th>En proceso ...</th>";
		}

		$mostrarFaseDos=$Equipos->EtapaDos($vertical);
		if (!empty($mostrarFaseDos)) {
			$i=1;
				foreach ($mostrarFaseDos as $key) {
				 $FaseDos.=" <tr><th scope='row'>".$i."</th><td>".$key['0']."</td><td>".$key['1']."</td></tr>";
				 $i++;
			}
		}
		else{
			$FaseDos=" <th>En proceso ...</th>";
		}
		$mostrarFaseTres=$Equipos->EtapaTres($vertical); 
		if (!empty($mostrarFaseTres)) {
			$i=1;
				foreach ($mostrarFaseTres as $key) {
				 $FaseTres.=" <tr><th scope='row'>".$i."</th><td>".$key['0']."</td><td>".$key['1']."</td></tr>";
				 $i++;
			}
		}
		else{
			$FaseTres=" <th>En proceso ...</th>";
		}
 
	}
 echo  json_encode(array( 'FaseUno'=>$FaseUno,'FaseDos'=>$FaseDos,'FaseTres'=>$FaseTres)); 
 

 
 ?>

