<?php 
include_once("../login/securityHacker.php"); 
include_once "../class/comunidad.php"; 
$id=$_SESSION['idUserHacker'];
$comunidad = new comunidad();
$ver =$comunidad->mostrarDatos($id);
 

 ?>