<?php 
require_once("../../class/Juez.php");
 
if (isset($_POST["IdActualizar"]) &&isset($_POST["psw"]) &&isset($_POST["celular"]) &&isset($_POST["correo"])) {
	/*Declarando variables*/
	$id=$_POST["IdActualizar"];
	$psw=$_POST["psw"];
	$cel=$_POST["celular"];
	$email=$_POST["correo"];
	$msj="";

	if ($psw=='') {
		 $msj="1";
	}
	elseif ($cel=='' or strlen($cel)<9 ) {
		$msj="2";
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) or $email=='' ) {		
		$msj="3";
	}else{
		echo $id ." ".$psw." ".$cel." ".$email;
		//$ActualizarJuez=new Juez();
		//$Registrar=$ActualizarJuez->ActualizarDatosJueces($id,$email,$psw,$cel);
		$msj="0";
	}
	echo $msj;
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