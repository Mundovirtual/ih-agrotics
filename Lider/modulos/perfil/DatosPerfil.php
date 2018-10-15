<?php 
include_once "../class/Lider.php";
 
$id=$_SESSION['idUserLider'];
$Lider = new Lider();
$ver =$Lider->mostrarDatos($id);
 

 ?>