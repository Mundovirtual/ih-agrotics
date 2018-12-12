<?php  
  include_once("conexion.php");
class proyectos{

	function index($fase){
		$fase=sanitizar($fase);
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT `proyecto`.`id`, concat(`comunidad`.`Nombre`, ' ', `comunidad`.`Apellidos`) as 'Nlider', `comunidad`.`E-mail`, `comunidad`.`Celular`, `proyecto`.`NombreDeEquipo`, `proyecto`.`NombreProyecto`, `vertical`.`Nombre`, `vertical`.`Descripcion`, `proyecto`.`Descripcion`, `proyecto`.`FechaRegistro`, `proyecto`.`Vertical_id`, `proyecto`.`fase`, `hackatonedicion`.`id` as `hackId` FROM `proyecto` inner join `comunidad` on `comunidad`.`id`=`proyecto`.`comunidad_id` inner join `vertical` on `proyecto`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` where `hackatonedicion`.`status`='1' and `proyecto`.`fase`='$fase' ";
 		 
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();

	}
	function ConsultarFases(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `infconfiguracion`.`Fases_idFases` FROM `infconfiguracion` inner join `hackatonedicion` on `hackatonedicion`.`id`=`infconfiguracion`.`HackatonEdicion_id` WHERE `hackatonedicion`.`status`='1' and `infconfiguracion`.`Estatus_idEstatus` ='2' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 }
	function EstadoFases($id){	 
			$id=sanitizar($id);		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `Id`, `HackatonEdicion_id`, `Fases_idFases`, `EquiposLimite`, `Estatus_idEstatus` FROM `infconfiguracion` WHERE `HackatonEdicion_id`='$id'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 }
		
	function ProyectosXvertical($id,$fase){
		$id=sanitizar($id);
		$fase=sanitizar($fase);

		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT `proyecto`.`id`, concat(`comunidad`.`Nombre`,' ', `comunidad`.`Apellidos`) as 'Nlider', `comunidad`.`E-mail`, `comunidad`.`Celular`, `proyecto`.`NombreDeEquipo`, `proyecto`.`NombreProyecto`, `vertical`.`Nombre`, `vertical`.`Descripcion`, `proyecto`.`Descripcion`, `proyecto`.`FechaRegistro`,`proyecto`.`Vertical_id`, `proyecto`.`fase`, `hackatonedicion`.`id` as `hackId` FROM `proyecto` inner join `comunidad` on `comunidad`.`id`=`proyecto`.`comunidad_id` inner join `vertical` on `proyecto`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` where `hackatonedicion`.`status`='1' and `proyecto`.`Vertical_id`='$id'  and `proyecto`.`fase`='$fase' ";
 		//echo $sql."<br>";
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();

	}
	function integrantes($idProyecto){
		$idProyecto=sanitizar($idProyecto);
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT concat(`comunidad`.`Nombre`, ' ',`comunidad`.`Apellidos`) as 'hack', `comunidad`.`E-mail`, `comunidad`.`Celular`, `team`.`Proyecto_id`, `team`.`status` FROM `team` inner join `comunidad` on `team`.`comunidad_id`=`comunidad`.`id` inner join `proyecto` on `team`.`Proyecto_id`= `proyecto`.`id` inner join `vertical` on `proyecto`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` where `team`.`Proyecto_id`='$idProyecto' and `team`.`status`='1' and `hackatonedicion`.`status`='1'";
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
 

 	function sanitizar($text){ 		
		 	$variable=filter_var($text, FILTER_SANITIZE_STRING);
		 	return htmlspecialchars($variable);
		 }

}
?>