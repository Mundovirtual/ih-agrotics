<?php 
include_once "../../../class/RegistroHackerP.php"; 
if (isset($_POST["idH"])&&isset($_POST["idP"])) {
	$Proyectos= new RegistroProyHack();
	$Validar=$Proyectos->EnviarSolicitud($_POST["idH"],$_POST["idP"]); 
	 echo "0";
}




 ?>