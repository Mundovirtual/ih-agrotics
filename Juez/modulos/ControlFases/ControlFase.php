<?php 
include_once ("../../../class/proyectosJuez.php");
include_once ("../../../class/Hackaton.php"); 

$Hack=new idHackaton();
$idhack=$Hack->mostrarDatosHackaton();
$Idhack=$idhack['0']['0'];
echo $Idhack;
var_dump($Idhack);

$fase=new proyectos();
$Estatus=$fase->EstadoFases($Idhack);
var_dump($Estatus);

 ?>