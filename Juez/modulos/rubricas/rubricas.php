<?php
	include_once("../../../class/rubricas.php");
	session_start();
	if (empty($_SESSION['idUserJuez'])) { 
 	  echo  json_encode(array('Tabla'=>'0'));
	  session_destroy();
	}
	else{
		if (isset($_POST['IdVertical'])) {
			$idVertical=$_POST['IdVertical'];
		 	$rubricas =new rubricas();
		 	$Mostrar=$rubricas->mostrarRubricas($idVertical);
		 	 
		 	if (count($Mostrar)==0) {
		 		$tabla='<div class="text-center"><div class="alert alert-warning" role="alert"><h2> Vertical sin rubrica</h2><h6>Consulte con el administrador del sistema</h6></div></div>';
		 		echo  json_encode(array('Tabla'=>$tabla));

		 	}else{
		 		$body="";
		 		$i=1;

		 		$head='<form id="Calificacion"><table class=\"table table-hover\"><thead><tr><th scope=\"col\">#</th><th scope=\"col\">pregunta</th><th scope=\"col\">Calificacion</th></tr></thead><tbody>';

		 		foreach ($Mostrar as $key ) {
		 			$body.='<tr><th scope="row">'.$i.'</th><td>'.$key['1'].'</td><td><div class="form-group"><select class="custom-select" name="'.$key['0'].'"><option>...</option><option>0</option> 
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></div></td></tr>';
		   			$i++;
		 		}
				$foot='</tbody></table></form>';

				 echo  json_encode(array('Tabla'=>$head.$body.$foot));
		 	}
		}

		if (isset($_POST['Registrar']) and isset($_POST['Califacaciones'])) {
			/*Creamos variables*/
			$idJuez=$_SESSION['idUserJuez'];
			$calf=$_POST['Califacaciones'];
			$msj="";
			$Aux="0";
			/*LA cadena que se recibe del formulario lo convertimos en arreglo*/
			$Rubricas = explode("&", $calf);
			
			foreach ($Rubricas as $key ) {
				/*Canvertir nuevamente en un arraglo*/
				 $PreguntaValor = explode("=", $key); 
				 
				 /*Verificar si las preguntas han sido contestadas*/
				 if ($PreguntaValor['1']=="...") {
				 	
				 	 $msj="Rellena todos los campos";
				 	 $Aux="1";
				 	 echo json_encode(array('ValidarRubrica'=>$msj));
				 	 break;
				 }

			}
			
			if ($msj=="" and $Aux=="0" ) {
				$msj="0";
				echo json_encode(array('ValidarRubrica'=>$msj));
			}
  		}
	}


 ?>


    	
 
 