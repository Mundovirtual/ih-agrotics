<?php 
include_once("conexion.php");
	 class Hacker{
	 	/*Modulo slolicitud Jueces*/
	 	function ConsultarProyecto($Id){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql=" SELECT `proyectoID` FROM `detalleequipo` where `IDlider`='$Id' and `HStatus`='1' limit 1 ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function MostrarHackersPorAceptar($IdProyecto){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `id`, `Nombre`, `Apellidos`, `E-mail`, `Celular`, `Carrera`, `Institucion`, `FechaNacimiento`, `Habilidades`, `Hobbies`, `Estado`, `proyectoID`, `IDlider`, `NombreDeEquipo`, `NombreProyecto`, `NVertical`, `VDesc`, `VAsesoria`, `Hedicion`, `HStatus` FROM `detalleequipo` where `proyectoID`='$IdProyecto' and `HStatus`='1' and `Estado`='0' ";
	 		$resultado=mysqli_query($Conexion,$sql); 
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	
	 	function MostrarHackersAceptados($IdProyecto){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `id`, `Nombre`, `Apellidos`, `E-mail`, `Celular`, `Carrera`, `Institucion`, `FechaNacimiento`, `Habilidades`, `Hobbies`, `Estado`, `proyectoID`, `IDlider`, `NombreDeEquipo`, `NombreProyecto`, `NVertical`, `VDesc`, `VAsesoria`, `Hedicion`, `HStatus` FROM `detalleequipo` where `proyectoID`='$IdProyecto' and `HStatus`='1' and `Estado`='1'";

	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function TotalHackers($IdProyecto){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT  `Estado`, `proyectoID` ,`HStatus` FROM `detalleequipo` WHERE `proyectoID`='$IdProyecto' and  `Estado`='1' and `HStatus`='1'";
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