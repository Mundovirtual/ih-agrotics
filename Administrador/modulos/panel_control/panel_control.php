<?php 
include_once("../../class/panel_control.php"); 
if (isset($_POST['botones'])) {
	$botones=new panel_control();
	$insertar=$botones->verticales();
	$botones="";
	if (count($insertar)>0) {
		foreach ($insertar as $key) {
			$botones.='<button type="button" class="btn btn-info" id="'.$key['0'].'" name="'.$key['2'].'" title="'.$key['2'].'" value="'.$key['0'].'" onclick="VerticalAlerta('."'".$key['1']."'".')" style="margin: 20px">'.$key['1'].'</button>';
		}
	}
	echo json_encode($botones);
}
 ?>