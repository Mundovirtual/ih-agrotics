<?php 
                                 
include_once ("../../class/MiPerfil.php");
    

if (isset($_POST['idAct']) && isset($_POST['Usuario']) && isset($_POST['Correo']) && isset($_POST['Contrasena'])) {
	$id=$_POST['idAct'];
	$Usr=$_POST['Usuario'];
	$correo=$_POST['Correo'];
	$pass=$_POST['Contrasena'];
	
	$msj="";
	$aux="0";

	if(strlen($Usr)<5){
		$msj="Usuario: Longitud no valida";
		$aux="1";
	}else if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
		$msj="Correo: Correo no valido";
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
		 $ver=$Actualizar->ActualizarDatosHacker($id,$correo,$Usr,$pass); 
		if ($ver=='1') {
		 	$msj='0';
		 }else{
		 	$msj='Ha ocurrido un error inesperado';
		 }
		
	}
	echo json_encode(array('Estado'=>$msj));
}

 ?>


 