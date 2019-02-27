<?php 
require_once("../../class/configuracion.php");
 
/*Registrar*/
if (isset($_POST['Registro'])) { 
	/*Descoponer cadenas*/
	$array = explode("&", $_POST['Registro']);  
	/*Acceder a variablesCreadas*/
	/*Var Hackaton*/
	$StringHack=$array[0];
		$ArrayHack=explode("=", $StringHack);
		$idHack=$ArrayHack[1];

	/*Var fase uno*/  
	$FaseUno = $array[1];
		$ArrayFaseUno=explode("=", $FaseUno);
		/*Var para insertar*/
			$idFaseUno=$ArrayFaseUno[0];
			$valFaseUno="0";


	/*Var fase dos*/  
	$FaseDos= $array[2];
		$ArrayFaseDos=explode("=", $FaseDos);
			/*Var para insertar*/
			$idFaseDos=$ArrayFaseDos[0];
			$valFaseDos=$ArrayFaseDos[1];


	/*Var fase Tres*/  
	$FaseTres= $array[3];
		$ArrayFaseTres=explode("=", $FaseTres);
			/*Var para insertar*/
			$idFaseTres=$ArrayFaseTres[0];
			$valFaseTres=$ArrayFaseTres[1]; 
 
	$msj="";
	$Aux="0";   
	if ($idHack=='') {
		 $msj="Hackaton: Campo vacío ";
		 $aux="1";
	}else if ($valFaseUno=='') {
		 $msj="Pitch 1: Campo vacío ";
		 $aux="1";
	} else if ($valFaseDos=='') {
		 $msj="Pitch 2: Campo vacío ";
		 $aux="1";
	} else if ($valFaseTres=='') {
		 $msj="Pitch 3: Campo vacío ";
		 $aux="1";
	} else if (!is_numeric($valFaseDos) or !filter_var($valFaseDos,FILTER_VALIDATE_INT)) {
		 $msj="Pitch 2: Solo campos enteros";
		 $aux="1";
	} else if (!is_numeric($valFaseTres) or !filter_var($valFaseTres,FILTER_VALIDATE_INT)) {
		 $msj="Pitch 3: Solo campos enteros";
		 $aux="1";
	} else if($valFaseDos<$valFaseTres){
		$msj="Pitch 2: El número debe ser mayor a pitch 3";
		 $aux="1";	
	} else if ($Aux=='0') {
		$Validar=new configuracion();
		/*Insertar registros uno*/
		$val=$Validar->validar($idHack,$idFaseUno);
		 if (empty($val)) { 
		 	$registrar=$Validar->Insertar($idHack,$idFaseUno,$valFaseUno);

		 	$msj="1";
		}
		/*Fase dos*/
		$val=$Validar->validar($idHack,$idFaseDos);
		 if (empty($val)) 	{ 
		 	$registrar=$Validar->Insertar($idHack,$idFaseDos,$valFaseDos);

		 	$msj="1";
		}
		/*Fase tres*/
		$val=$Validar->validar($idHack,$idFaseTres);
		 if (empty($val)) 	{ 
		 	$registrar=$Validar->Insertar($idHack,$idFaseTres,$valFaseTres);

		 	$msj="1";
		}
 
		else{
			$msj="Ya existen los registros";
		}
		 
	}
	 echo json_encode(array('Estado'=>$msj));
}


if (isset($_POST['IdEliminar'])) { 
		$idEliminar=$_POST['IdEliminar']; 
		$Eliminar=new configuracion();
		$val=$Eliminar->eliminar($idEliminar);
		if ($val=='1') {
			$msj="Registro eliminado";
		}else{
			$msj='0';
		}
		echo json_encode(array('Estado'=>$msj));
}



?>