<?php 
include_once("../../class/Hackaton.php");
/*Registrar Hackaton*/
/*Variable para dejar la imagen como nula como primera etapa de desarrollo*/
$imagen="null";
$msj="";
$Aux="0";

if (isset($_POST['NombreHack'])&&isset($_POST['InicioHack'])&&isset($_POST['EntregaProyectos'])&&isset($_POST['FinHack'])){

	$nombreHack=$_POST['NombreHack'];
	$inicioHack=strtotime($_POST['InicioHack']);
	$EntregaHack=strtotime($_POST['EntregaProyectos']);
	$FinHack=strtotime($_POST['FinHack']);

	if ($nombreHack=='') {
		$msj="Edición : campo vacío";
		$Aux="1";
	}else if($_POST['InicioHack']==''){
		$msj="Inicio Hackaton : campo vacío";
		$Aux="1";
	}else if($_POST['EntregaProyectos']==''){
		$msj="Limite de Registros : campo vacío";
		$Aux="1";

	}else if($_POST['FinHack']==''){
		$msj="Fin de Hackaton : campo vacío";
		$Aux="1";

	}else if (strlen($nombreHack)<3 || strlen($nombreHack)>30 ) {
		$msj="Nombre: longitud mayor a 3 y menor a 30";
		$Aux="1";

	} else if ($inicioHack > $EntregaHack) {
		$msj="Fecha limite de Registros no valido";
		$Aux="1";
	}		 
	else if ($EntregaHack > $FinHack) {
		$msj="Fecha limite de Registros no valido";
		$Aux="1";
	}
	else if ($inicioHack > $FinHack) {
		$msj="Fecha de Inicio del Hackaton no valido";
		$Aux="1";
	}
	else if ( $inicioHack < $EntregaHack &&  $EntregaHack<$FinHack && $Aux=="0") {
		
		$Hackaton=new Hackaton();
		$Registrar=$Hackaton->InsertarHackaton($nombreHack,$_POST['InicioHack'],$_POST['EntregaProyectos'],$_POST['FinHack'], $imagen);
		 if ($Registrar!='0') {
		 	$msj="1";
		 }else{
		 	$msj="Ya existe el registro";
		 }
 	 
		}
	echo json_encode(array('Estado'=>$msj));
}
 
if (isset($_POST['IdEliminar'])){
	$Hackaton=new Hackaton();
	$eliminar=$Hackaton->EliminarHackaton($_POST['IdEliminar']); 
	echo "0";
}


/*Estatus*/
if (isset($_POST['EstatusHackaton'])) { 
	$Hackaton=new Hackaton();
	$eliminar=$Hackaton->CambiarEstado($_POST['EstatusHackaton']); 
	if ($eliminar=='1') {
		$msj="1";
	}else{
		$msj="Ha ocurrido un error inesperado";
	}
		echo json_encode(array('Estado'=>$msj)); 
}


/*Actualizar*/
 
if (isset($_POST["idAc"])&&isset($_POST['EhN'])&&isset($_POST['EhI'])&&isset($_POST['EhE'])&&isset($_POST['EhF'])){

	$id=$_POST["idAc"];
	$nombreHack=$_POST['EhN'];
	$inicioHack=strtotime($_POST['EhI']);
	$EntregaHack=strtotime($_POST['EhE']);
	$FinHack=strtotime($_POST['EhF']);

	if ($nombreHack=='') {
		$msj="Edición : campo vacío";
		$Aux="1";
	}else if($_POST['EhI']==''){
		$msj="Inicio Hackaton : campo vacío";
		$Aux="1";
	}else if($_POST['EhE']==''){
		$msj="Limite de Registros : campo vacío";
		$Aux="1";

	}else if($_POST['EhF']==''){
		$msj="Fin de Hackaton : campo vacío";
		$Aux="1";

	}else if (strlen($nombreHack)<3 || strlen($nombreHack)>30 ) {
		$msj="Nombre: longitud mayor a 3 y menor a 30";
		$Aux="1";

	} else if ($inicioHack > $EntregaHack) {
		$msj="Fecha limite de Registros no valido";
		$Aux="1";
	}		 
	else if ($EntregaHack > $FinHack) {
		$msj="Fecha limite de Registros no valido";
		$Aux="1";
	}
	else if ($inicioHack > $FinHack) {
		$msj="Fecha de Inicio del Hackaton no valido";
		$Aux="1";
	}
	else if ( $inicioHack < $EntregaHack &&  $EntregaHack<$FinHack && $Aux=="0") {
		
		$Hackaton=new Hackaton(); 
		$Registrar=$Hackaton->ActualizarHackaton($_POST["idAc"],$_POST["EhN"],$_POST["EhI"],$_POST["EhE"],$_POST["EhF"],$imagen);
		 if ($Registrar=='1') {
		 	$msj="1";
		 }else{
		 	$msj="Ya existe el registro";
		 }
 	 
		}
	echo json_encode(array('Estado'=>$msj));
}


 
 
 
?>
