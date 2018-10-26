<?php 
<<<<<<< HEAD
=======
include_once("conexion.php");
>>>>>>> proyectos
class proyectos{

	function index(){
		$con=new Conectar();
 		$Conexion=$con->conexion();
<<<<<<< HEAD
 		$sql="SELECT `proyecto`.`id`, concat(`comunidad`.`Nombre`,' ',`comunidad`.`Apellidos`) as 'Nlider', `comunidad`.`E-mail`, `comunidad`.`Celular`, `proyecto`.`NombreDeEquipo`, `proyecto`.`NombreProyecto`, `vertical`.`Descripcion`, `proyecto`.`Descripcion`, `proyecto`.`FechaRegistro` FROM `proyecto` inner join `comunidad` on `comunidad`.`id`=`proyecto`.`comunidad_id` inner join `vertical` on `proyecto`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` WHERE `hackatonedicion`.`status`='1'";
=======
 		$sql="SELECT `proyecto`.`id`, concat(`comunidad`.`Nombre`,' ', `comunidad`.`Apellidos`) as 'Nlider', `comunidad`.`E-mail`, `comunidad`.`Celular`, `proyecto`.`NombreDeEquipo`, `proyecto`.`NombreProyecto`, `vertical`.`Nombre`, `vertical`.`Descripcion`, `proyecto`.`Descripcion`, `proyecto`.`FechaRegistro` FROM `proyecto` inner join `comunidad` on `comunidad`.`id`=`proyecto`.`comunidad_id` inner join `vertical` on `proyecto`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` where `hackatonedicion`.`status`='1'";
>>>>>>> proyectos
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();

	}
<<<<<<< HEAD
	function integrantes(){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT `infconfiguracion`.`Id`, `hackatonedicion`.`Edicion`, `vertical`.`Descripcion`, `fases`.`pitch`, `infconfiguracion`.`EquiposLimite` FROM `infconfiguracion` inner join `vertical` on `infconfiguracion`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `hackatonedicion`.`id`=`vertical`.`HackatonEdicion_id` inner join `fases` on `fases`.`idFases`=`infconfiguracion`.`Fases_idFases` where `hackatonedicion`.`status`='1'  ";
=======
	function integrantes($idProyecto){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT concat(`comunidad`.`Nombre`, ' ',`comunidad`.`Apellidos`) as 'hack', `comunidad`.`E-mail`, `comunidad`.`Celular`, `team`.`Proyecto_id`, `team`.`status` FROM `team` inner join `comunidad` on `team`.`comunidad_id`=`comunidad`.`id` inner join `proyecto` on `team`.`Proyecto_id`= `proyecto`.`id` inner join `vertical` on `proyecto`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` where `team`.`Proyecto_id`='$idProyecto' and `team`.`status`='1' and `hackatonedicion`.`status`='1'";
>>>>>>> proyectos
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
<<<<<<< HEAD
=======

>>>>>>> proyectos
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