<?php 
include_once("conexion.php");
class proyectos{

	function index(){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT `proyecto`.`id`, concat(`comunidad`.`Nombre`,' ', `comunidad`.`Apellidos`) as 'Nlider', `comunidad`.`E-mail`, `comunidad`.`Celular`, `proyecto`.`NombreDeEquipo`, `proyecto`.`NombreProyecto`, `vertical`.`Nombre`, `vertical`.`Descripcion`, `proyecto`.`Descripcion`, `proyecto`.`FechaRegistro` FROM `proyecto` inner join `comunidad` on `comunidad`.`id`=`proyecto`.`comunidad_id` inner join `vertical` on `proyecto`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` where `hackatonedicion`.`status`='1'";
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();

	}
	function integrantes($idProyecto){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT concat(`comunidad`.`Nombre`, ' ',`comunidad`.`Apellidos`) as 'hack', `comunidad`.`E-mail`, `comunidad`.`Celular`, `team`.`Proyecto_id`, `team`.`status` FROM `team` inner join `comunidad` on `team`.`comunidad_id`=`comunidad`.`id` inner join `proyecto` on `team`.`Proyecto_id`= `proyecto`.`id` inner join `vertical` on `proyecto`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` where `team`.`Proyecto_id`='$idProyecto' and `team`.`status`='1' and `hackatonedicion`.`status`='1'";
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}

	function eliminar(){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="DELETE FROM `infconfiguracion` WHERE `Id`='$id'"; 
 		$resultado=mysqli_query($Conexion,$sql);
 		return $resultado;
 		$Conexion->mysql_close();


	}
}


 ?>