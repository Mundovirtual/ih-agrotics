<?php 
 include_once("conexion.php");
	 
	 class configuracion{

	 	function indexConfiguracion(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `infconfiguracion`.`Id`, `hackatonedicion`.`Edicion`, `vertical`.`Descripcion`, `fases`.`pitch`, `infconfiguracion`.`EquiposLimite` FROM `infconfiguracion` inner join `vertical` on `infconfiguracion`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `hackatonedicion`.`id`=`vertical`.`HackatonEdicion_id` inner join `fases` on `fases`.`idFases`=`infconfiguracion`.`Fases_idFases` where `hackatonedicion`.`status`='1'  ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function validar($idHack,$IdVert,$idFase){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `infconfiguracion`.`Id`as 'idConf', `hackatonedicion`.`id` as 'idHack', `vertical`.`id` as 'idVertical', `infconfiguracion`.`Fases_idFases` as 'idFases' FROM `infconfiguracion` inner join `vertical` on `infconfiguracion`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `hackatonedicion`.`id`=`vertical`.`HackatonEdicion_id` where `hackatonedicion`.`id`='$idHack' and `vertical`.`id`='$IdVert' and `infconfiguracion`.`Fases_idFases`='$idFase' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function Insertar($Vertical_id,$idfase,$EquiposLimite){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="INSERT INTO `infconfiguracion`(`Vertical_id`, `Fases_idFases`, `EquiposLimite`) VALUES ('$Vertical_id','$idfase','$EquiposLimite')";  
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
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