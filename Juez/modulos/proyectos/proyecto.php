<?php 
include_once("../../../login/securityJuez.php");
include_once("../../../class/proyectosJuez.php");
include_once("../../../class/VerticalesJuez.php");
/*Cargar verticales*/

/*Cargar proyectos*/
if (isset($_POST['idproyectos'])) {
	 $idProyectos=$_POST['idproyectos'];
	 $tabla="";
	 $InicioTabla='<table class="table"><thead><tr><th>Nombre</th><th>Email</th><th>Telefono</th></tr></thead><tbody >';
	 $finTabla=' </tbody></table>';
	 $i=1;
	 $integrantes= new proyectos();
	 $ver=$integrantes->integrantes($idProyectos); 
	 if (empty($ver)) {
	 	$msj="0";
	 }else{
	  foreach ($ver as $key) {
	  	$tabla.='<tr><td>'.$key['0'].'</td><td>'.$key['1'].'</td><td>'.$key['2'].'</td></tr>';
	  }

	 }
	 echo  json_encode(array('Integrantes'=>$InicioTabla.$tabla.$finTabla)); 
}
 

 if (isset($_POST['InsertarVerticales'])) {
 	$verticales=new MostrarProyectosPorVerticales();
 	$mostrar=$verticales->verticales(); 
 	$head='<select class="form-control text-center"><<option onclick="VerticalesMostrar('."'".'0'."'".')">Mostrar todos</option>';
 	$body="";

 	foreach ($mostrar as $key ) {
 		$body.='<option onclick="VerticalesMostrar('."'".$key['0']."'".')">'.$key['1']."-> ".$key['2'].'</option>';		
 	}
 	$foot="</select>";
 	echo json_encode(array('SelectVerticales'=>$head.$body.$foot)); 
 }
 ?>

 		
  
			        
			        
		       