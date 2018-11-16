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
			$valFaseUno=$ArrayFaseUno[1];


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
	}else if (!is_numeric($valFaseUno) or !filter_var($valFaseUno,FILTER_VALIDATE_INT)) {
		 $msj="Pitch 1: Solo campos enteros";
		 $aux="1";
	} else if (!is_numeric($valFaseDos) or !filter_var($valFaseDos,FILTER_VALIDATE_INT)) {
		 $msj="Pitch 2: Solo campos enteros";
		 $aux="1";
	} else if (!is_numeric($valFaseTres) or !filter_var($valFaseTres,FILTER_VALIDATE_INT)) {
		 $msj="Pitch 3: Solo campos enteros";
		 $aux="1";
	} else if($valFaseUno<$valFaseDos){
		$msj="Pitch 1: El número debe ser mayor a los demás pitch";
		 $aux="1";	
	}else if($valFaseDos<$valFaseTres){
		$msj="Pitch 2: El número debe ser menor al Pitch 1 y mayor a pitch 2";
		 $aux="1";	
	}else if($valFaseTres>$valFaseUno){
		$msj="Pitch 3: El número debe ser menor a los demás pitch";
		 $aux="1";	
	}else if ($Aux=='0') {
		$Validar=new configuracion();
		/*Insertar registros uno*/
		$val=$Validar->validar($idHack,$idFaseUno);
		 if (empty($val)) 	{ 
		 	$registrar=$Validar->Insertar(json_decode($idHack),json_decode($idFaseUno),json_decode($valFaseUno));

		 	$msj="1";
		}
		/*Fase dos*/
		$val=$Validar->validar($idHack,$idFaseDos);
		 if (empty($val)) 	{ 
		 	$registrar=$Validar->Insertar(json_decode($idHack),json_decode($idFaseDos),json_decode($valFaseDos));

		 	$msj="1";
		}
		/*Fase tres*/
		$val=$Validar->validar($idHack,$idFaseTres);
		 if (empty($val)) 	{ 
		 	$registrar=$Validar->Insertar(json_decode($idHack),json_decode($idFaseTres),json_decode($valFaseTres));

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