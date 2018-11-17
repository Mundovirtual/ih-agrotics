<?php 
	include_once("../../class/panel_control.php"); 
	include_once("../../class/Hackaton.php");

	/*Obtener valor del hack activo*/
	$hackaton= new Hackaton();
	$verHackaton=$hackaton->mostrarDatosHackaton();
	$idHack=$verHackaton['0']['0'];
	$Panel=new panel_control();

	if (isset($_POST['botones'])) {
		/**/
		
		$insertar=$Panel->Configuracion($idHack);
		 

		if (count($insertar)<3) {
			echo json_encode(array('Botones'=>'0'));
		}
		if (count($insertar)==3) {
			$BotonFaseUno="";
			$NequiposFaseUno="";
			$BotonFaseDos="";
			$NequiposFaseDos="";
			$BotonFaseTres="";
			$NequiposFaseTres="";
			/*Fase uno*/
			$idUno=$insertar[0][0];	
			$FaseUno=$insertar[0][2];		
			$NEquiposUno=$insertar[0][3];
			$EstatusUno=$insertar[0][4];

			/*Fase Dos*/
			$idDos=$insertar[1][0];	
			$FaseDos=$insertar[1][2];		
			$NEquiposDos=$insertar[1][3];
			$EstatusDos=$insertar[1][4];

			/*Fase Tres*/
			$idTres=$insertar[2][0];
			$FaseTres=$insertar[2][2];			
			$NEquiposTres=$insertar[2][3];
			$EstatusTres=$insertar[2][4];
			
			if ($EstatusUno=='1') {
				$BotonFaseUno='<button id="faseUno" type="button" class="btn btn-success" onclick="EstadoFase('."'".$idUno."','".$FaseUno."','".$NEquiposUno."','".$EstatusUno."'".')">Empezar</button>';
				$NequiposFaseUno=$NEquiposUno;

				$BotonFaseDos='<button id="faseUno" type="button" class="btn btn-success" disabled="true"  onclick="EstadoFase('."'".$idDos."','".$FaseDos."','".$NEquiposDos."','".$EstatusDos."'".')">Empezar</button>';
				$NequiposFaseDos=$NEquiposDos;

				$BotonFaseTres='<button id="faseUno" type="button" class="btn btn-success" disabled="true" onclick="EstadoFase('."'".$idTres."','".$FaseTres."','".$NEquiposTres."','".$EstatusTres."'".')">Empezar</button>';

				$NequiposFaseTres=$NEquiposTres;
				
			}else if ($EstatusUno=='2') {
				$BotonFaseUno='<button id="faseUno" type="button" class="btn btn-warning" onclick="EstadoFase('."'".$idUno."','".$FaseUno."','".$NEquiposUno."','".$EstatusUno."'".')">Finalizar</button>';
				$NequiposFaseUno=$NEquiposUno;

				$BotonFaseDos='<button id="faseUno" type="button" class="btn btn-success" disabled="true"  onclick="EstadoFase('."'".$idDos."','".$FaseDos."','".$NEquiposDos."','".$EstatusDos."'".')">Empezar</button>';
				$NequiposFaseDos=$NEquiposDos;

				$BotonFaseTres='<button id="faseUno" type="button" class="btn btn-success" disabled="true" onclick="EstadoFase('."'".$idTres."','".$FaseTres."','".$NEquiposTres."','".$EstatusTres."'".')">Empezar</button>';
				
				$NequiposFaseTres=$NEquiposTres;
				
			}else if ($EstatusUno=='3' and $EstatusDos=='1') {
				$BotonFaseUno='<button id="faseUno" type="button" class="btn btn-danger" disabled="true" onclick="EstadoFase('."'".$idUno."','".$FaseUno."','".$NEquiposUno."','".$EstatusUno."'".')">Finalizado</button>';
				$NequiposFaseUno=$NEquiposUno;

				$BotonFaseDos='<button id="faseUno" type="button" class="btn btn-success"  onclick="EstadoFase('."'".$idDos."','".$FaseDos."','".$NEquiposDos."','".$EstatusDos."'".')">Empezar</button>';
				$NequiposFaseDos=$NEquiposDos;

				$BotonFaseTres='<button id="faseUno" type="button" class="btn btn-success" disabled="true" onclick="EstadoFase('."'".$idTres."','".$FaseTres."','".$NEquiposTres."','".$EstatusTres."'".')">Empezar</button>';
				
				$NequiposFaseTres=$NEquiposTres;
			}else if ($EstatusUno=='3' and $EstatusDos=='2') {
				$BotonFaseUno='<button id="faseUno" type="button" class="btn btn-danger" disabled="true" onclick="EstadoFase('."'".$idUno."','".$FaseUno."','".$NEquiposUno."','".$EstatusUno."'".')">Finalizado</button>';
				$NequiposFaseUno=$NEquiposUno;

				$BotonFaseDos='<button id="faseUno" type="button" class="btn btn-warning"  onclick="EstadoFase('."'".$idDos."','".$FaseDos."','".$NEquiposDos."','".$EstatusDos."'".')">Finalizar</button>';
				$NequiposFaseDos=$NEquiposDos;

				$BotonFaseTres='<button id="faseUno" type="button" class="btn btn-success" disabled="true" onclick="EstadoFase('."'".$idTres."','".$FaseTres."','".$NEquiposTres."','".$EstatusTres."'".')">Empezar</button>';
				
				$NequiposFaseTres=$NEquiposTres;
				
			}else if ($EstatusUno=='3' and $EstatusDos=='3' and $EstatusTres=='1') {
				$BotonFaseUno='<button id="faseUno" type="button" class="btn btn-danger" disabled="true" onclick="EstadoFase('."'".$idUno."','".$FaseUno."','".$NEquiposUno."','".$EstatusUno."'".')">Finalizado</button>';
				$NequiposFaseUno=$NEquiposUno;

				$BotonFaseDos='<button id="faseUno" type="button" class="btn btn-danger" disabled="true" onclick="EstadoFase('."'".$idDos."','".$FaseDos."','".$NEquiposDos."','".$EstatusDos."'".')">Finalizado</button>';
				$NequiposFaseDos=$NEquiposDos;

				$BotonFaseTres='<button id="faseUno" type="button" class="btn btn-success" onclick="EstadoFase('."'".$idTres."','".$FaseTres."','".$NEquiposTres."','".$EstatusTres."'".')">Empezar</button>';
				
				$NequiposFaseTres=$NEquiposTres;
			}else if ($EstatusUno=='3' and $EstatusDos=='3' and $EstatusTres=='2') {
				$BotonFaseUno='<button id="faseUno" type="button" class="btn btn-danger" disabled="true" onclick="EstadoFase('."'".$idUno."','".$FaseUno."','".$NEquiposUno."','".$EstatusUno."'".')">Finalizado</button>';
				$NequiposFaseUno=$NEquiposUno;

				$BotonFaseDos='<button id="faseUno" type="button" class="btn btn-danger" disabled="true" onclick="EstadoFase('."'".$idDos."','".$FaseDos."','".$NEquiposDos."','".$EstatusDos."'".')">Finalizado</button>';
				$NequiposFaseDos=$NEquiposDos;

				$BotonFaseTres='<button id="faseUno" type="button" class="btn btn-warning" onclick="EstadoFase('."'".$idTres."','".$FaseTres."','".$NEquiposTres."','".$EstatusTres."'".')">FInalizar</button>';
				
				$NequiposFaseTres=$NEquiposTres;
				
			}else if ($EstatusUno=='3' and $EstatusDos=='3' and $EstatusTres=='3') {
				$BotonFaseUno='<button id="faseUno" type="button" class="btn btn-danger" disabled="true" onclick="EstadoFase('."'".$idUno."','".$FaseUno."','".$NEquiposUno."','".$EstatusUno."'".')">Finalizado</button>';
				$NequiposFaseUno=$NEquiposUno;

				$BotonFaseDos='<button id="faseUno" type="button" class="btn btn-danger" disabled="true" onclick="EstadoFase('."'".$idDos."','".$FaseDos."','".$NEquiposDos."','".$EstatusDos."'".')">Finalizado</button>';
				$NequiposFaseDos=$NEquiposDos;

				$BotonFaseTres='<button id="faseUno" type="button" class="btn btn-danger" disabled="true" onclick="EstadoFase('."'".$idTres."','".$FaseTres."','".$NEquiposTres."','".$EstatusTres."'".')">FInalizar</button>';
				
				$NequiposFaseTres=$NEquiposTres;
			}
			$Button = array(
						    array(
						        "faseButton" => $BotonFaseUno,
						        "NEquipos" => $NequiposFaseUno
						    ),
						    array(
						        "faseButton" => $BotonFaseDos,
						        "NEquipos" => $NequiposFaseDos
						    ),
						    array(
						        "faseButton" =>$BotonFaseTres ,
						        "NEquipos" => $NequiposFaseTres
						    )
						);
 			echo json_encode($Button);
		}
 
		
	
	}
	if (isset($_POST['id']) &&isset($_POST['fase']) &&isset($_POST['Equipos']) &&isset($_POST['Estatus'])) {
		$id= $_POST['id'];
		$Fase= $_POST['fase'];
		$Nequipos= $_POST['Equipos'];
		$Estatus=$_POST['Estatus'];


		if ($Estatus==1) {

			 $EstatusActualidos=2;
			 $ActualizarFases=$Panel->Actualizar($id,$EstatusActualidos);

		}else if ($Estatus==2) {

			 $EstatusActualidos=3; 
			 $ActualizarFases=$Panel->Actualizar($id,$EstatusActualidos);

		} 
		else if ($Estatus==3) {
			$EstatusActualidos=3;
			 $ActualizarFases=$Panel->Actualizar($id,$EstatusActualidos);
			  

		}


	}

 ?>