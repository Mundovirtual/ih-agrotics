
<?php 
 include_once("conexion.php");
	 
	 class panel_control{

	 	function Configuracion($id){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `Id`, `HackatonEdicion_id`, `Fases_idFases`, `EquiposLimite`, `Estatus_idEstatus` FROM `infconfiguracion` WHERE `HackatonEdicion_id`='$id'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	 

	 	function Actualizar($id,$EquiposLimite){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `infconfiguracion` SET `EquiposLimite`='$EquiposLimite' WHERE `Id`='$id'";  
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function eliminar($id){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `infconfiguracion` WHERE `Id`='$id'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 }
 

 ?>