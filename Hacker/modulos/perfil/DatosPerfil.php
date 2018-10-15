<?php 
include_once("../login/security.php"); 
include_once "../class/Lider.php"; 
$id=$_SESSION['idUserHacker'];
$Lider = new Lider();
$ver =$Lider->mostrarDatos($id);
 

 ?>