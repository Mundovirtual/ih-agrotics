<?php 
require_once("../../class/Juez.php");
 
if (isset($_POST["IdActualizar"]) &&isset($_POST["psw"]) &&isset($_POST["celular"]) &&isset($_POST["correo"])) {
	/*Declarando variables*/
	$id=$_POST["IdActualizar"];
	$psw=$_POST["psw"];
	$cel=$_POST["celular"];
	$email=$_POST["correo"];
	$msj="";
	$aux="0";

	if ($psw=='' or $psw==' ') {
		 $msj="Contraseña vacía";
		 $aux="1";
	}
	elseif ($cel=='' or strlen($cel)<9 ) {
		$msj="Número celular no válido";
		$aux="1";
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) or $email=='' ) {		
		$msj="Correo no válido";
		$aux="1";

	}else if($aux=="0"){ 
		$ActualizarJuez=new Juez();
		$Registrar=$ActualizarJuez->ActualizarDatosJueces($id,$email,$psw,$cel);
		$msj="0";
	}
	echo json_encode(array('Estado'=>$msj));
}

 
/*Eliminar*/
if (isset($_POST['idEliminar'])) {
 
	if ($_POST['idEliminar']!='') {
		$JuezEliminar=new Juez();
		$Registrar=$JuezEliminar->EliminarSolicitudJuez($_POST['idEliminar']);
		if ($Registrar=='1') {
			 $msg='1';
		}else{
			$msg="Dato referenciado: No se puede Eliminar";
		}
		
	} 
	echo json_encode(array('Estado'=>$msg));
}







 ?> 