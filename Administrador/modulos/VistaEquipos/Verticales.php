<?php 
include_once("../../class/Vertical.php");

 if (isset($_POST['InsertarVerticales'])) {
 	$verticales=new Vertical();
 	$mostrar=$verticales->mostrarDatos(); 
 	$head='<select class="form-control text-center"><option onclick="VerticalesMostrar('."'".'0'."'".')">Selecciona una vertical</option>';
 	$body="";

 	foreach ($mostrar as $key ) {
 		$body.='<option onclick="VerticalesMostrar('."'".$key['0']."'".')">'.$key['1']."-> ".$key['2'].'</option>';		
 	}
 	$foot="</select>";
 	echo json_encode(array('SelectVerticales'=>$head.$body.$foot)); 
 }
 
  ?>