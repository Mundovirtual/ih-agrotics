<?php 
include_once("conexion.php");
class RegistroProyHack{

	function BuscarProyectos(){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT 
				`proyecto`.`id`, 
				`proyecto`.`comunidad_id` as 'lider', 
				`proyecto`.`NombreDeEquipo`, 
				`proyecto`.`NombreProyecto`, 
				`vertical`.`Nombre` as 'Nverticcal', 
				`vertical`.`Descripcion` as 'DescripcionV',
				`vertical`.`InfAsesoria`, 
				`proyecto`.`Descripcion`as 'descProyecto', 
				`proyecto`.`FechaRegistro`,
				`hackatonedicion`.`Edicion`
				 FROM `proyecto` 
				inner join `vertical`  on `vertical`.`id`=`proyecto`.`Vertical_id`
				inner join `hackatonedicion` on `hackatonedicion`.`id`= `vertical`.`HackatonEdicion_id`
				where `hackatonedicion`.`status`='1'";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
	/*existe*/
	function ValidarRegistroUsuario($idHacker,$idProyecto){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT `comunidad_id`, `Proyecto_id` FROM `team` WHERE `comunidad_id`='$idHacker' and `Proyecto_id`='$idProyecto' ";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
	/*RegistrarProyecto*/
	function EnviarSolicitud($idHacker,$idProyecto){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `team`(`comunidad_id`, `Proyecto_id`, `status`) VALUES ($idHacker,$idProyecto,'0')";
		$resultado=mysqli_query($Conexion,$sql);
 		return $resultado;
 		$Conexion->mysql_close();
	}





}



 ?>