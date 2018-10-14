<?php 
include_once("conexion.php");
class RegistroProyHack{

	function BuscarProyectos(){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT 
			`proyecto`.`id` as 'ProyectoId',
			 concat(`comunidad`.`Nombre`,' ', `comunidad`.`Apellidos`) as 'nombre', 
			`comunidad`.`E-mail`, 
			`comunidad`.`Celular`,
			`carrera`.`Carrera`,
			`institucion`.`Institucion`,
			`proyecto`.`NombreDeEquipo`, 
			`proyecto`.`id`,
			`proyecto`.`NombreProyecto`,
			`proyecto`.`Descripcion` as 'DesProyecto',
			`vertical`.`Nombre` as 'Vertical', 
			`vertical`.`Descripcion` as 'VerticalDesc',
			`vertical`.`InfAsesoria`,
			`hackatonedicion`.`Edicion`,  
			`hackatonedicion`.`status`,
			FROM 
			`proyecto` 
			inner join `comunidad` on `comunidad`.`id`=`proyecto`.`comunidad_id`
			inner join `carrera` on `carrera`.`id`=`comunidad`.`Carrera_id`
			inner join `institucion`on `institucion`.`id`=`comunidad`.`Institucion_id`
			inner join `vertical` on `vertical`.`id`=`proyecto`.`Vertical_id`
			inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id`
			where `hackatonedicion`.`status`='1'";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
	/*existe*/
	function ValidarRegistroUsuario(){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT `comunidad_id`, `Proyecto_id` FROM `team`";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
	/*RegistrarProyecto*/
	function EnviarSolicitud($idHacker,$idProyecto){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `team`(`comunidad_id`, `Proyecto_id`, `status`) VALUES ($idHacker,$idProyecto,0)";
		$resultado=mysqli_query($Conexion,$sql);
 
 		return $resultado;
 		$Conexion->mysql_close();
	}





}



 ?>