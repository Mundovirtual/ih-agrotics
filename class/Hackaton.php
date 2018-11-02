<?php 
include_once("conexion.php");
	 
	 class idHackaton{

	 	function mostrarDatosHackaton(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `id` FROM `hackatonedicion` WHERE `status` ='1'  ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
 }

 ?>