<?php 
include_once("../login/securityJuez.php");
include_once "../class/Lider.php"; 
$id=$_SESSION['idUserJuez'];
$Lider = new Lider();
$ver =$Lider->mostrarDatos($id);
 
 ?>