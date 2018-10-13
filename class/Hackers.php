<?php 
include_once("conexion.php");
	 class Hacker{
	 	/*Modulo slolicitud Jueces*/
	 	function MostrarHackersPorAceptar($IdProyecto){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `comunidad`.`id`, `comunidad`.`Nombre`, `comunidad`.`Apellidos`, `comunidad`.`E-mail`, `comunidad`.`Celular`, `carrera`.`Carrera`, `institucion`.`Institucion`, `comunidad`.`FechaNacimiento`, `comunidad`.`Facebook`,`comunidad`.`Twitter` FROM `comunidad` inner join `carrera` on `Carrera_id`= `carrera`.`id` inner join `institucion` on `comunidad`.`Institucion_id`=`institucion`.`id` inner join `team` on `team`.`comunidad_id`=`comunidad`.`id` where `team`.`Proyecto_id` ='$IdProyecto'and `team`.`status`='0'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function MostrarHackersAceptados($IdProyecto){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `comunidad`.`id`, `comunidad`.`Nombre`, `comunidad`.`Apellidos`, `comunidad`.`E-mail`, `comunidad`.`Celular`, `carrera`.`Carrera`, `institucion`.`Institucion`, `comunidad`.`FechaNacimiento`, `comunidad`.`Facebook`,`comunidad`.`Twitter` FROM `comunidad` inner join `carrera` on `Carrera_id`= `carrera`.`id` inner join `institucion` on `comunidad`.`Institucion_id`=`institucion`.`id` inner join `team` on `team`.`comunidad_id`=`comunidad`.`id` where `team`.`Proyecto_id` ='$IdProyecto'and `team`.`status`='1'";

	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function TotalHackers($IdProyecto){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `comunidad`.`id`, `comunidad`.`Nombre`, `comunidad`.`Apellidos`, `comunidad`.`E-mail`, `comunidad`.`Celular`, `carrera`.`Carrera`, `institucion`.`Institucion`, `comunidad`.`FechaNacimiento`, `comunidad`.`Facebook`,`comunidad`.`Twitter` FROM `comunidad` inner join `carrera` on `Carrera_id`= `carrera`.`id` inner join `institucion` on `comunidad`.`Institucion_id`=`institucion`.`id` inner join `team` on `team`.`comunidad_id`=`comunidad`.`id` where `team`.`Proyecto_id` ='$IdProyecto'and `team`.`status`='1'";

	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysql_numrows($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function AceptarHacker($Hacker,$Proyecto){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `team` SET `status`='1' WHERE `comunidad_id`='$Hacker' and `Proyecto_id`='$Proyecto'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
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
		 
	 	 

	 }
 

 ?>