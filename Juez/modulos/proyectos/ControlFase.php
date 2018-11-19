<?php 
include_once ("../../../class/proyectosJuez.php");
include_once ("../../../class/Hackaton.php"); 

$Hack=new idHackaton();
$idhack=$Hack->mostrarDatosHackaton();


if (count($idhack)!=0) {
	$Idhack=$idhack['0']['0'];  

	$fase=new proyectos();
	$Estatus=$fase->EstadoFases($Idhack);

	if (count($Estatus)==3 and isset($_POST['Key'])) {
		/*Botones*/
		$FaseUno=$Estatus['0']['4'];
		$FaseDos=$Estatus['1']['4'];
		$FaseTres=$Estatus['2']['4'];

		if ($FaseUno==1 && $FaseDos==1 && $FaseTres==1) {
			$fase="Fase 1";
			$Estado="Por empezar";
			$Aux="1";
						 
		}else if ($FaseUno==2 && $FaseDos==1 && $FaseTres==1) {
			$fase="Fase 1";
			$Estado="Activo";
			$Aux="2";						 
		}else if ($FaseUno==3 && $FaseDos==1 && $FaseTres==1) {
			$fase="Fase 1";
			$Estado="Evaluacion Finalizada";
			$Aux="3";						 
		}else if ($FaseUno==3 && $FaseDos==1 && $FaseTres==1) {
			$fase="Fase 2";
			$Estado="Esperando la fase dos";
			$Aux="1"; 
		}else if ($FaseUno==3 && $FaseDos==2 && $FaseTres==1) {
			$fase="Fase 2";
			$Estado="Activo";
			$Aux="2"; 
		}else if ($FaseUno==3 && $FaseDos==3 && $FaseTres==1) {
			$fase="Fase 2";
			$Estado="Evaluacion Finalizada";
			$Aux="3"; 
		}else 	if ($FaseUno==3 && $FaseDos==3 && $FaseTres==1) {
			$fase="Fase 3";
			$Estado="Esperando la fase tres";
			$Aux="1"; 
		}else if ($FaseUno==3 && $FaseDos==3 && $FaseTres==2) {
			$fase="Fase 3";
			$Estado="Activo";
			$Aux="2";  
		}else if ($FaseUno==3 && $FaseDos==3 && $FaseTres==3) {
			$fase="Fase 3";
			$Estado="Proceso de evaluación terminado,gracias por su participación!!";
			$Aux="3"; 
		}

		echo json_encode(array('Fase'=>$fase,'Mensaje'=>$Estado,'Estatus'=>$Aux));
	 

	}
	

}

 ?>