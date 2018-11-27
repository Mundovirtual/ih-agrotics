<?php 

 include_once("conexion.php");
class MisProyectos{

	function SolicitudesAceptados($idHack){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT `comunidad_id`, `status`, `nombreLider`, `EmailLider`, `CelularLider`, `CarreraLider`, `InstLider`, `NombreDeEquipo`, `NombreProyecto`, `DesProyecto`, `Vertical`, `VerticalDesc`, `InfAsesoria`, `Hack`, `statusHack`, `IdProyecto` FROM `comunidadlider` WHERE `comunidad_id`='$idHack' and `status`='1' ";    
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
	function SolicitudesEnEspera($idHack){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT `comunidad_id`, `status`, `nombreLider`, `EmailLider`, `CelularLider`, `CarreraLider`, `InstLider`, `NombreDeEquipo`, `NombreProyecto`, `DesProyecto`, `Vertical`, `VerticalDesc`, `InfAsesoria`, `Hack`, `statusHack`,`IdProyecto` FROM `comunidadlider` WHERE `comunidad_id`='$idHack' and `status`='0'";
	 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
	function EliminarSolicitud($idHack,$IdProyecto){
			$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `team` WHERE  `team`.`comunidad_id`='$idHack' and  `team`.`Proyecto_id`= '$IdProyecto'";
	 		$resultado=mysqli_query($Conexion,$sql); 
	 		return $resultado;
	 		$Conexion->mysql_close();
	}

	function validarFecha(){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack` FROM `hackatonedicion` where `status`='1' ";
	 	 $resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
		
	}


}


 ?>