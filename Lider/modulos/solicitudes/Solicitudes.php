<?php 
require_once "../../../class/Hackers.php";
session_start();
$Proyecto=$_SESSION["IdProyecto"];
 
if (isset($_POST["IdAgregar"])) {
	$msj="";
	$Agregar =new Hacker();
	$SiExcede=$Agregar->TotalHackers($Proyecto);  
	if ( count($SiExcede)<5) {		 
		 $Aceptar=$Agregar->AceptarHacker($_POST["IdAgregar"],$Proyecto);
		 $msj="1";
	}
	else{
		$msj="0";
	}
	echo json_encode(array('Estado'=>$msj));
	 
}
if (isset($_POST["IdEliminar"])) {
	 $msj="";
	$Delete =new Hacker();
	$Eliminar=$Delete->EliminarHacker($_POST["IdEliminar"],$Proyecto);
	echo json_encode(array('Estado'=>'0'));
}



 ?>