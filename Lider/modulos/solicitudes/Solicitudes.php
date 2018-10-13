<?php 
require_once "../../../class/Hackers.php";
session_start();
echo $_SESSION['idUser'];
$Hacker =new Hacker();
$ver=$Hacker->MostrarHackersPorAceptar();

 ?>