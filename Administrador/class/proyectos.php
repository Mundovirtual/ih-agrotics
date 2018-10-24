<?php 
class proyectos{

	function index(){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT `infconfiguracion`.`Id`, `hackatonedicion`.`Edicion`, `vertical`.`Descripcion`, `fases`.`pitch`, `infconfiguracion`.`EquiposLimite` FROM `infconfiguracion` inner join `vertical` on `infconfiguracion`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `hackatonedicion`.`id`=`vertical`.`HackatonEdicion_id` inner join `fases` on `fases`.`idFases`=`infconfiguracion`.`Fases_idFases` where `hackatonedicion`.`status`='1'  ";
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();

	}
	function integrantes(){
		$con=new Conectar();
 		$Conexion=$con->conexion();
 		$sql="SELECT `infconfiguracion`.`Id`, `hackatonedicion`.`Edicion`, `vertical`.`Descripcion`, `fases`.`pitch`, `infconfiguracion`.`EquiposLimite` FROM `infconfiguracion` inner join `vertical` on `infconfiguracion`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `hackatonedicion`.`id`=`vertical`.`HackatonEdicion_id` inner join `fases` on `fases`.`idFases`=`infconfiguracion`.`Fases_idFases` where `hackatonedicion`.`status`='1'  ";
 		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}
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