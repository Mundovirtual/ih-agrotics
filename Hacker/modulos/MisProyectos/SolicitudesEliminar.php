<?php  
include_once("../../../login/securityHacker.php"); 
include_once "../../../class/MisProyectos.php";

$msj="";
if (isset($_POST["IdHacEliminar"])&&isset($_POST["IdProyectoEliminar"])) { 
		$Eliminar = new MisProyectos();
		$Validar=$Eliminar->EliminarSolicitud($_POST["IdHacEliminar"],$_POST["IdProyectoEliminar"]);
		$msj="1";
}
echo $msj;






 ?>