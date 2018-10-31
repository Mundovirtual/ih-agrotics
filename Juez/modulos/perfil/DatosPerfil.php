<?php 
include_once("../login/securityJuez.php");
include_once "../class/comunidad.php"; 
$id=$_SESSION['idUserJuez'];
$comunidad = new comunidad();
$ver =$comunidad->mostrarDatos($id);
 
 ?>