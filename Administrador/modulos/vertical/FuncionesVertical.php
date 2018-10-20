<?php 
include_once("../../class/Vertical.php");
 $msjRegistro="";
 $Aux="0";
if (isset($_POST['NombreVertical'])&&isset($_POST['DescripcionVertical'])&&isset($_POST['AsesoriaVertical'])&&isset($_POST['EdicionVertical']) ){ 

	$vertical=$_POST['NombreVertical'];
	$descripcion=$_POST['DescripcionVertical'];
	$asesoria=$_POST['AsesoriaVertical'];
	$edicion=$_POST['EdicionVertical'];

 
	if ($vertical=='') {
		$msjRegistro="Nombre: campo vacío";
		$Aux="1";
	}
	else if (strlen($vertical)<7 || strlen($vertical)>50 ) {
		$msjRegistro="Nombre: longitud mayor a 8 y menor a 50";
		$Aux="1";

	}
	else  if ($descripcion=='') {
		$msjRegistro="Descripción: campo vacío";
		$Aux="1";
	}
	else if (strlen($descripcion)<7 || strlen($descripcion)>180 ) {
		$msjRegistro="Descripción: longitud mayor a 8 y menor a 180";
		$Aux="1";
	}
	else  if ($asesoria=='') {
		$msjRegistro="Descripción: campo vacío";
		$Aux="1";
	}
	else if (strlen($asesoria)<7 || strlen($asesoria)>180 ) {
		$msjRegistro="Descripción: longitud mayor a 8 y menor a 180";
		$Aux="1";
	}
	else if  ($_POST['EdicionVertical']=="Selecciona...") {
		  $msjRegistro= "Selecciona una vertical";
		  $Aux="1";
	}	 
	else if($Aux=="0"){ 		 
		$Vertical=new Vertical();
		$Registrar=$Vertical->InsertarVertical($vertical,$descripcion,$asesoria,$edicion); 
		if ($Registrar==true) {
			$msjRegistro="1";
		}else{
			$msjRegistro="Ha ocurrido un error en la base de datos";
		 
	}  	
 }
 echo json_encode(array('Estado'=>$msjRegistro));
}
 
if (isset($_POST['IdEliminar'])){
	$IdEliminar=$_POST['IdEliminar'];
	$msjEliminar="";
	$Vertical=new Vertical();
	$eliminar=$Vertical->EliminarVertical($_POST['IdEliminar']); 
	if ($eliminar=='1') {
			$msjEliminar="1";
		}else{
			$msjEliminar="Vertical referenciada";
		 
	}
	echo json_encode(array('EstadoDelete'=>$msjEliminar));
		

}
 
 $msjUpdate="";
 $AuxUpdate="0";
if (isset($_POST["idAc"])&&isset($_POST["eNv"])&&isset($_POST["eDv"])&&isset($_POST["eAv"])&&isset($_POST["eHv"])) {
	$idUser=$_POST["idAc"];
	$vertical=$_POST["eNv"];
	$descripcion=$_POST["eDv"];
	$asesoria=$_POST["eAv"];
	$hackaton=$_POST["eHv"];

	if ($vertical=='') {
		$msjUpdate="Nombre: campo vacío";
		$AuxUpdate="1";
	}
	else if (strlen($vertical)<7 || strlen($vertical)>50 ) {
		$msjUpdate="Nombre: longitud mayor a 8 y menor a 50";
		$AuxUpdate="1";

	}
	else  if ($descripcion=='') {
		$msjUpdate="Descripción: campo vacío";
		$AuxUpdate="1";
	}
	else if (strlen($descripcion)<7 || strlen($descripcion)>80 ) {
		$msjUpdate="Descripción: longitud mayor a 8 y menor a 80";
		$AuxUpdate="1";
	}
	else  if ($asesoria=='') {
		$msjUpdate="Descripción: campo vacío";
		$AuxUpdate="1";
	}
	else if (strlen($asesoria)<7 || strlen($asesoria)>80 ) {
		$msjUpdate="Descripción: longitud mayor a 8 y menor a 80";
		$AuxUpdate="1";
	}
	else if  ($hackaton=="Selecciona...") {
		 $msjUpdate= "Selecciona una vertical";
		  $AuxUpdate="1";
	}	 
	else if($AuxUpdate=="0"){ 		 
		$Vertical=new Vertical();
	 	$Registrar=$Vertical->ActualizarVertical($idUser,$vertical,$descripcion,$asesoria,$hackaton); 
		
		if ($Registrar==true) {
			$msjUpdate="1";
		}else{
			$msjUpdate="Ha ocurrido un error en la base de datos";
		 
	}  	
 }
 echo json_encode(array('EstadoUpdate'=>$msjUpdate));



 
}

 
?>
 