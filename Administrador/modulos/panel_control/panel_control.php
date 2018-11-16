<?php 
include_once("../../class/panel_control.php"); 
include_once("../../class/Hackaton.php");

	$hackaton= new Hackaton();
	$verHackaton=$hackaton->mostrarDatosHackaton();
	$idHack=$verHackaton['0']['0'];
	

	if (isset($_POST['botones'])) {
		$botones=new panel_control();
		$insertar=$botones->Configuracion($idHack);
		var_dump($insertar);
		$botones=""; 
		if (count($insertar)<2) {
			$botones=""; 
		}
		if (count($insertar)==3) {
			echo "3";
		}


		if (count($insertar)>0) {
 
			foreach ($insertar as $key) {
				$botones.='<button type="button" class="btn btn-info" id="'.$key['0'].'" name="'.$key['2'].'" title="'.$key['2'].'" value="'.$key['0'].'" onclick="VerticalAlerta('."'".$key['0']."','".$key['1']."'".')" style="margin: 20px">'.$key['1'].'</button>';
			}
		}
		echo json_encode(array('Botones'=>$botones));
	}
 ?>