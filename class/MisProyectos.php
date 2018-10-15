<?php 

 include_once("conexion.php");
class MisProyectos{

	function SolicitudesAceptados($idHack){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT  `team`.`comunidad_id`, `team`.`Proyecto_id`,`comunidadlider`.`nombreLider`,
		`comunidadlider`.`EmailLider`, `comunidadlider`.`CelularLider`, `comunidadlider`.`CarreraLider`, `comunidadlider`.`InstLider`, `comunidadlider`.`NombreDeEquipo`, `comunidadlider`.`NombreProyecto`, `comunidadlider`.`DesProyecto`, `comunidadlider`.`Vertical`, `comunidadlider`.`VerticalDesc`, `comunidadlider`.`InfAsesoria`, `comunidadlider`.`Hack`, `comunidadlider`.`statusHack` FROM `team`inner join `comunidadlider` on `team`.`comunidad_id`=`comunidadlider`.`comunidad_id`where `team`.`comunidad_id`='$idHack'  and `team`.`status`='1'";
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
	function SolicitudesEnEspera($idHack){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT  `team`.`comunidad_id`, `team`.`Proyecto_id`,`comunidadlider`.`nombreLider`,
		`comunidadlider`.`EmailLider`, `comunidadlider`.`CelularLider`, `comunidadlider`.`CarreraLider`, `comunidadlider`.`InstLider`, `comunidadlider`.`NombreDeEquipo`, `comunidadlider`.`NombreProyecto`, `comunidadlider`.`DesProyecto`, `comunidadlider`.`Vertical`, `comunidadlider`.`VerticalDesc`, `comunidadlider`.`InfAsesoria`, `comunidadlider`.`Hack`, `comunidadlider`.`statusHack` FROM `team`inner join `comunidadlider` on `team`.`comunidad_id`=`comunidadlider`.`comunidad_id`where `team`.`comunidad_id`='$idHack'  and `team`.`status`='0'";
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


}


 ?>