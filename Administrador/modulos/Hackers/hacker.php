<?php 
require_once("../../class/hacker.php");
if (isset($_POST['IdHack'])&&isset($_POST['pass'])&&isset($_POST['celular'])&&isset($_POST['Correo'])) {
 
	$id= $_POST['IdHack'];
	$pass= $_POST['pass'];
	$cel= $_POST['celular'];
	$correo= $_POST['Correo'];
	$msj="";
	$aux="0";
	if ($pass=='' or $pass==' ') {
		$msj="Password: Campo vacío";
		$aux="1";
	}else if($cel==''){
		$msj="Celular : Campo vacío";
		$aux="1";
	}else if(strlen($cel)<9 || strlen($cel)>13){
		$msj="Celular: Logitud no valida";
		$aux="1";
	}else if(!is_numeric($cel)){
		$msj="Celular: Número no valido";
		$aux="1";
	}else if ($correo=='') {
		$msj="Correo : Campo vacío";
		$aux="1";
	}else if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
		$msj="Correo : Correo no válido ";
		$aux="1";
	}else if ($aux=='0') {
		 $Actualizar=new Hacker();
		 $ver=$Actualizar->ActualizarDatosHacker($id,$correo,$pass,$cel); 
		if ($ver=='1') {
		 	$msj='0';
		 }else{
		 	$msj='Ha ocurrido un error inesperado';
		 }
		
	}
	echo json_encode(array('Estado'=>$msj));

}




?>