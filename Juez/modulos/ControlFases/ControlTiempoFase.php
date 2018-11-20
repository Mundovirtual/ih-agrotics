<?php 
include_once ("../../../class/proyectosJuez.php");
include_once ("../../../class/Hackaton.php"); 

$Hack=new idHackaton();
$idhack=$Hack->mostrarDatosHackaton();


if (isset($_POST['Data'])) {

if (count($idhack)!=0) {
	$Idhack=$idhack['0']['0'];  

	$fase=new proyectos();
	$Estatus=$fase->EstadoFases($Idhack);

	if (count($Estatus)==3) {
		
		$mensaje="";

		$FaseUno=$Estatus['0']['4'];
		$FaseDos=$Estatus['1']['4'];
		$FaseTres=$Estatus['2']['4'];  

		/*echo json_encode(array('Fase'=>$fase,'$Mensaje'=>$Estado,'$Estatus'=>$Aux));*/
	 	if ($FaseUno=='2' || $FaseDos=='2' || $FaseTres=='2') {
	 		$mensaje= '0';
	 	}
		else{
			$mensaje= '1';
		}

		echo json_encode(array('validar'=>$mensaje));

	}

}

}



 ?>