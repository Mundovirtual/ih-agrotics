<?php  
require_once "../../../class/Hackers.php";
session_start();
$Proyecto=$_SESSION["IdProyecto"];
 
if (isset($_POST["IdEliminar"])) {
	 $msj="";
	$Delete =new Hacker();
	$Eliminar=$Delete->EliminarHacker($_POST["IdEliminar"],$Proyecto);
	echo json_encode(array('Estado'=>'0'));
}



 ?>