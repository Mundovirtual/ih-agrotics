<?php 
require_once("../../class/configuracion.php");
 
if (isset($_POST['idEdit'])&&isset($_POST['equiposEdit'])) {
 	
	$id= $_POST['idEdit']; 
	$Equipo= $_POST['equiposEdit'];
	$msj="";
	$aux="0";  
	if ($Equipo==' ' || $Equipo=='') {
		$msj="Equipo límite: Campo vacío ";
		$aux="1";
	}else if (!is_numeric($Equipo)) {
		$msj="Equipo límite: Solo números ";
		$aux="1";
	}
	else if (is_int($Equipo)) {
		$msj="Equipo límite: Solo números enteros";
		$aux="1";
	}else if((int) $Equipo<='0' || (int) $Equipo>'100'){
		$msj="Equipo límite: Número mayor a uno y menor a 100";
		$aux="1";
	}
	else if ($aux=='0') {
		$Conf=new configuracion();
		$Editar=$Conf->Actualizar($id,$Equipo);
		if ($Editar=='1') {
			$msj="1";
		}else{
			$msj="Ha ocurrido un error inesperado";
		}
		

	} 
 
	 echo json_encode(array('Estado'=>$msj));

}
if (isset($_POST['Hack'])&&isset($_POST['vert'])&&isset($_POST['fase'])&&isset($_POST['Nequipos'])) {
	$Hack=$_POST['Hack'];
	$vert=$_POST['vert'];
	$fase=$_POST['fase'];
	$Nequipos=$_POST['Nequipos'];
	$msj="";
	$Aux="0";  
	if ($Hack=='s') {
		 $msj="Hackaton: Campo vacío ";
		 $aux="1";
	}else if ($vert=='s') {
		 $msj="Vertical: Campo vacío ";
		 $aux="1";
	}
	 else if($fase=='s') {
		 $msj="Fase: Campo vacío ";
	}else if ($Nequipos==' ' || $Nequipos=='') {
		$msj="Equipo límite: Campo vacío ";
		$aux="1";
	}else if (!is_numeric($Nequipos)) {
		$msj="Equipo límite: Solo números ";
		$aux="1";
	}
	else if (is_int($Nequipos)) {
		$msj="Equipo límite: Solo números enteros";
		$aux="1";
	}else if ($Aux=='0') {
		$Validar=new configuracion();
		$val=$Validar->validar($Hack,$vert,$fase);
		 if (empty($val)) 	{ 
		 	$registrar=$Validar->Insertar(json_decode($vert),json_decode($fase),json_decode($Nequipos));
		 	$msj="1";
		}
		else{
			$msj="Ya existe el registro";
		}
		 
	}
	 echo json_encode(array('Estado'=>$msj));
}


if (isset($_POST['IdEliminar'])) {
		$idEliminar=$_POST['IdEliminar']; 
		$Eliminar=new configuracion();
		$val=$Eliminar->eliminar($idEliminar);
		if ($val=='1') {
			$msj="Registro eliminado";
		}else{
			$msj='0';
		}
		echo json_encode(array('Estado'=>$msj));
}



?>