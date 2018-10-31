<?php 
	 include_once("conexion.php");
	 
	 class Hackaton{

	 	function mostrarDatosHackaton(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT * FROM `hackatonedicion`";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
 
 
	   
 
 
 ?>