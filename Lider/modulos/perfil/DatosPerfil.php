<?php 
include_once "../class/comunidad.php";
 
$id=$_SESSION['idUserLider'];
$Comunidad = new comunidad();
$ver =$Comunidad->mostrarDatos($id);
  
 ?>