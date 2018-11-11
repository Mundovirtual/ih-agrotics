<?php 

class MostrarProyectosPorVerticales {

	 	function verticales(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `vertical`.`id`, `vertical`.`Nombre`, `vertical`.`Descripcion` FROM `vertical` INNER JOIN `hackatonedicion` on `hackatonedicion`.`id`=`vertical`.`HackatonEdicion_id` where `hackatonedicion`.`status`='1'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	
}
 ?>