<?php 
include_once("../../class/proyectos.php");
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
	 echo json_encode($InicioTabla.$tabla.$finTabla);
}
  

 ?>

 		
  