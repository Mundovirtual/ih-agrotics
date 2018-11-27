<?php 
	include_once("../../class/panel_control.php"); 
	include_once("../../class/Hackaton.php");

	/*Obtener valor del hack activo*/
	$hackaton= new Hackaton();
	$verHackaton=$hackaton->mostrarDatosHackaton();
	$idHack=$verHackaton['0']['0'];
	if (!empty($idhack)) {
		$Panel=new panel_control();
	 
	if (isset($_POST['botones'])) {
		/*cargar botones*/
		
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

				
			}else if ($EstatusUno=='3' and $EstatusDos=='1' and $EstatusTres=='1') {
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

	/*Actualizar estados*/
	if (isset($_POST['id']) &&isset($_POST['fase']) &&isset($_POST['Equipos']) &&isset($_POST['Estatus'])) {
		$id= $_POST['id'];
		$Fase= $_POST['fase']+1;
		$Nequipos= $_POST['Equipos'];
		$Estatus=$_POST['Estatus'];

			

		if ($Estatus==1) {

			 $EstatusActualidos=2;
			 $ActualizarFases=$Panel->Actualizar($id,$EstatusActualidos);

		} 
		else if ($Estatus==2) {

			 $EstatusActualidos=3; 
			 $ActualizarFases=$Panel->Actualizar($id,$EstatusActualidos); 
			 Calificar_Fase($Fase);
		}
		  
		else if ($Estatus==3) { 
			$EstatusActualidos=3;
			 $ActualizarFases=$Panel->Actualizar($id,$EstatusActualidos);
			 

		}


	}

	function Calificar_Fase($Fase){
		$Panel=new panel_control();
		$Consultar_N_Equipos=$Panel->NumeroPorFase($Fase);  
		$Consultar_verticales=$Panel->verticales();
		
		if ($Fase!=4) {
			$Nequipo=$Consultar_N_Equipos['0']['0'];
	 	 
			/*Fase uno y dos*/
			
			foreach ($Consultar_verticales as $key ) {
		 			 
		 			$Calificar=$Panel-> Calificar($key['0'],($Fase-1),$Nequipo); 
		 			foreach ($Calificar as $key2) {
		 				$update=$Panel->Update($key2['0'],$Fase); 
		 				$insertar=$Panel->guardarDatos($key2['0'],$key2['1'],$key2['2'],$key2['3'],$key2['4']);
		 				 
		 			}
		 			 
		 	}

		}
		else if($Fase==4){
			/*Fase tres*/ 
			foreach ($Consultar_verticales as $key ) {
				$Calificar=$Panel-> Calificar($key['0'],($Fase-1),'1');
				foreach ($Calificar as $key2 ) {
					
					$update=$Panel->Update($key2['0'],$Fase-1); 
					$insertar=$Panel->guardarDatos($key2['0'],$key2['1'],$key2['2'],$key2['3'],$key2['4']);
				}
		 	}
		}
	 
			
	 

		}
		
	}

 
 ?>