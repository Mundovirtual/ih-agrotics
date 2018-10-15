<?php 
include_once("conexion.php");
class RegistroProyHack{

	function BuscarProyectos(){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT * FROM `detprodesglozado`";
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