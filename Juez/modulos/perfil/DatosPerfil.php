<?php 
include_once("../../../login/securityJuez.php");
include_once ("../../../class/comunidad.php");
    

if (isset($_POST['idAct']) && isset($_POST['Correo']) && isset($_POST['cel']) && isset($_POST['psw'])) {
	$id=$_POST['idAct'];
	$correo=$_POST['Correo'];
	$cel=$_POST['cel'];
	$pass=$_POST['psw'];
	
	$msj="";
	$aux="0";
	if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
		 $msj="Correo: Correo no valido";
		$aux="1";
	}
	else if(strlen($cel)<9 || strlen($cel)>13){
		$msj="Celular: Logitud no valida";
		$aux="1";
	}
	else if(!is_numeric($cel)){
		$msj="Celular: Número no valido";
		$aux="1";
	}
	else if(strlen($cel)<9 || strlen($cel)>13){
		$msj="Celular: Logitud no valida";
		$aux="1";
	}
	elseif ($pass=='' or $pass==' ') {
		$msj="Contraseña: Campo vacío";
		$aux="1";
	}
	elseif (strlen($pass)<3) {
		$msj="Contraseña: Longitud no valida";
		$aux="1";
	}
	else if ($aux=='0') {
		 $Actualizar=new comunidad(); 
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
 