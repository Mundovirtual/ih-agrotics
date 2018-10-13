<?php 
include_once "../class/Lider.php";
 
$id=$_SESSION['idUser'];
$Lider = new Lider();
$ver =$Lider->mostrarDatos($id);
 

 ?>	