<?php 
include_once("conexion.php");
	 class Hacker{
	 	/*Modulo slolicitud Jueces*/
	 	function ConsultarProyecto($Id){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="select `comunidad`.`id` AS `id`,`comunidad`.`Nombre` AS `Nombre`,`comunidad`.`Apellidos` AS `Apellidos`,`comunidad`.`E-mail` AS `E-mail`,`comunidad`.`Celular` AS `Celular`,`carrera`.`Carrera` AS `Carrera`,`institucion`.`Institucion` AS `Institucion`, `comunidad`.`FechaNacimiento` AS `FechaNacimiento`,`comunidad`.`Habilidades` AS `Habilidades`,`comunidad`.`Hobbies` AS `Hobbies`,`team`.`status` AS `Estado`,`proyecto`.`id` AS `proyectoID`,`proyecto`.`Descripcion` AS `proyectoDesc`,`proyecto`.`comunidad_id` AS `IDlider`,`proyecto`.`NombreDeEquipo` AS `NombreDeEquipo`,`proyecto`.`NombreProyecto` AS `NombreProyecto`,`vertical`.`Nombre` AS `NVertical`,`vertical`.`Descripcion` AS `VDesc`,`vertical`.`InfAsesoria` AS `VAsesoria`,`hackatonedicion`.`Edicion` AS `Hedicion`,`hackatonedicion`.`status` AS `HStatus` from `team` inner join `comunidad` on `team`.`comunidad_id` = `comunidad`.`id` inner join `carrera` on `comunidad`.`Carrera_id` = `carrera`.`id` inner join `institucion` on `comunidad`.`Institucion_id` = `institucion`.`id` inner join `proyecto` on `team`.`Proyecto_id` = `proyecto`.`id` inner join `vertical` on `vertical`.`id` = `proyecto`.`Vertical_id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id` = `hackatonedicion`.`id` WHERE `proyecto`.`comunidad_id`='$Id' and `hackatonedicion`.`status`='1'  limit 1 ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();

	 	}

	 	function MostrarHackersPorAceptar($IdProyecto){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="select `comunidad`.`id` AS `idcomunidad`,`comunidad`.`Nombre` AS `Nombre`,`comunidad`.`Apellidos` AS `Apellidos`,`comunidad`.`E-mail` AS `E-mail`,`comunidad`.`Celular` AS `Celular`,`carrera`.`Carrera` AS `Carrera`,`institucion`.`Institucion` AS `Institucion`,`comunidad`.`FechaNacimiento` AS `FechaNacimiento`,`comunidad`.`Habilidades` AS `Habilidades`,`comunidad`.`Hobbies` AS `Hobbies`,`team`.`status` AS `Estado`,`proyecto`.`id` AS `proyectoID`,`proyecto`.`Descripcion` AS `proyectoDesc`,`proyecto`.`comunidad_id` AS `IDlider`,`proyecto`.`NombreDeEquipo` AS `NombreDeEquipo`,`proyecto`.`NombreProyecto` AS `NombreProyecto`,`vertical`.`Nombre` AS `NVertical`,`vertical`.`Descripcion` AS `VDesc`,`vertical`.`InfAsesoria` AS `VAsesoria`,`hackatonedicion`.`Edicion` AS `Hedicion`,`hackatonedicion`.`status` AS `HStatus` from `team` inner join `comunidad` on `team`.`comunidad_id` = `comunidad`.`id` inner join `carrera` on `comunidad`.`Carrera_id` = `carrera`.`id` inner join `institucion` on `comunidad`.`Institucion_id` = `institucion`.`id` inner join `proyecto` on `team`.`Proyecto_id` = `proyecto`.`id` inner join `vertical` on `vertical`.`id` = `proyecto`.`Vertical_id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id` = `hackatonedicion`.`id` WHERE `hackatonedicion`.`status`='1' and `team`.`Proyecto_id`='$IdProyecto' and `team`.`status`='0'";
	 	 echo $sql;
	 		$resultado=mysqli_query($Conexion,$sql); 
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	
	 	function MostrarHackersAceptados($IdProyecto){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="select `comunidad`.`id` AS `id`,`comunidad`.`Nombre` AS `Nombre`,`comunidad`.`Apellidos` AS `Apellidos`,`comunidad`.`E-mail` AS `E-mail`,`comunidad`.`Celular` AS `Celular`,`carrera`.`Carrera` AS `Carrera`,`institucion`.`Institucion` AS `Institucion`,`comunidad`.`FechaNacimiento` AS `FechaNacimiento`,`comunidad`.`Habilidades` AS `Habilidades`,`comunidad`.`Hobbies` AS `Hobbies`,`team`.`status` AS `Estado`,`proyecto`.`id` AS `proyectoID`,`proyecto`.`Descripcion` AS `proyectoDesc`,`proyecto`.`comunidad_id` AS `IDlider`,`proyecto`.`NombreDeEquipo` AS `NombreDeEquipo`,`proyecto`.`NombreProyecto` AS `NombreProyecto`,`vertical`.`Nombre` AS `NVertical`,`vertical`.`Descripcion` AS `VDesc`,`vertical`.`InfAsesoria` AS `VAsesoria`,`hackatonedicion`.`Edicion` AS `Hedicion`,`hackatonedicion`.`status` AS `HStatus` from `team` inner join `comunidad` on `team`.`comunidad_id` = `comunidad`.`id` inner join `carrera` on `comunidad`.`Carrera_id` = `carrera`.`id` inner join `institucion` on `comunidad`.`Institucion_id` = `institucion`.`id` inner join `proyecto` on `team`.`Proyecto_id` = `proyecto`.`id` inner join `vertical` on `vertical`.`id` = `proyecto`.`Vertical_id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id` = `hackatonedicion`.`id` WHERE `proyecto`.`id`='$IdProyecto' and `hackatonedicion`.`status`='1' and `team`.`status`='1'";

	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function TotalHackers($IdProyecto){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="select  `team`.`status` AS `Estado`,`proyecto`.`id` AS `proyectoID`, `hackatonedicion`.`status` AS `HStatus` from `team` inner join `comunidad` on `team`.`comunidad_id` = `comunidad`.`id` inner join `carrera` on `comunidad`.`Carrera_id` = `carrera`.`id` inner join `institucion` on `comunidad`.`Institucion_id` = `institucion`.`id` inner join `proyecto` on `team`.`Proyecto_id` = `proyecto`.`id` inner join `vertical` on `vertical`.`id` = `proyecto`.`Vertical_id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id` = `hackatonedicion`.`id` WHERE `proyecto`.`id`='21' and `hackatonedicion`.`status`='1' and `team`.`status`='1'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return   mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function AceptarHacker($Hacker,$Proyecto){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `team` SET `status`='1' WHERE `comunidad_id`='$Hacker' and `Proyecto_id`='$Proyecto'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function EliminarHacker($Hacker,$Proyecto){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `team` WHERE `comunidad_id`='$Hacker'and `Proyecto_id`='$Proyecto'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	/*Hacker Buscar proyectos*/
		 
	 	 

	 }
 

 ?>