<?php 
 include_once("conexion.php");
	 
	 class configuracion{

	 	function indexConfiguracion(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `infconfiguracion`.`Id`, `infconfiguracion`.`HackatonEdicion_id`, `hackatonedicion`.`Edicion`, `infconfiguracion`.`Fases_idFases`, `fases`.`pitch`, `infconfiguracion`.`EquiposLimite`, `infconfiguracion`.`Estatus_idEstatus` FROM `infconfiguracion` inner join `hackatonedicion` on `hackatonedicion`.`id`=`infconfiguracion`.`HackatonEdicion_id` inner join `fases` on `fases`.`idFases`=`infconfiguracion`.`Fases_idFases`";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function validar($idHack,$idFase){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `Id`, `HackatonEdicion_id`, `Fases_idFases`, `EquiposLimite` FROM `infconfiguracion` WHERE `HackatonEdicion_id`='$idHack' and `Fases_idFases`='$idFase' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function Insertar($idHack,$idfase,$EquiposLimite){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="INSERT INTO `infconfiguracion`( `HackatonEdicion_id`, `Fases_idFases`, `EquiposLimite`) VALUES ('$idHack','$idfase','$EquiposLimite')";  
	 		 
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