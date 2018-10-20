<?php 
require_once("../../class/Juez.php");
 
if (isset($_POST["IdActualizar"]) &&isset($_POST["psw"]) &&isset($_POST["celular"]) &&isset($_POST["correo"])) {
	/*Declarando variables*/
	$id=$_POST["IdActualizar"];
	$psw=$_POST["psw"];
	$cel=$_POST["celular"];
	$email=$_POST["correo"];
	$msj="";

	if ($psw=='' or $psw==' ') {
		 $msj="Contraseña vacía";
	}
	elseif ($cel=='' or strlen($cel)<9 ) {
		$msj="Número celular no valido";
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) or $email=='' ) {		
		$msj="Correo no valido";
	}else{ 
		$ActualizarJuez=new Juez();
		$Registrar=$ActualizarJuez->ActualizarDatosJueces($id,$email,$psw,$cel);
		$msj="0";
	}
	echo json_encode(array('Estado'=>$msj));
}

 
/*Eliminar*/
if (isset($_POST['idEliminar'])) {

	$msg="";
	if ($_POST['idEliminar']!='') {
		$JuezEliminar=new Juez();
		$Registrar=$JuezEliminar->EliminarSolicitudJuez($_POST['idEliminar']);
		$msg='0';
	}else{
		$msg='1';
	}
	echo $msg;
}







 ?> 