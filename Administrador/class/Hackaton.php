 
<?php 
	 include_once("conexion.php");
	 
	 class Hackaton{

	 	function mostrarDatosHackaton(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT * FROM `hackatonedicion` WHERE `status` = '1'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function HackatonDatos(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT * FROM `hackatonedicion`";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function InsertarHackaton($Edicion,$InicioHackaton,$FechLimiteRegProy,$TerminoHack,$Imagen){
	 		$Edicion=sanitizar($Edicion);
	 		$InicioHackaton=sanitizar($InicioHackaton);
	 		$FechLimiteRegProy=sanitizar($FechLimiteRegProy);
	 		$TerminoHack=sanitizar($TerminoHack); 
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `hackatonedicion` SET `status`='0' ";
	 		$sql="INSERT INTO `hackatonedicion`(`Edicion`, `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack`, `Imagen`,`status`) VALUES  ('$Edicion','$InicioHackaton','$FechLimiteRegProy','$TerminoHack','$Imagen','1')"; 	 		 
	 		$resultado=mysqli_query($Conexion,$sql); 
	 		return mysqli_insert_id($Conexion);
	 		$Conexion->mysql_close();
	 	}

	 	function ActualizarHackaton($id,$Edicion,$InicioHackaton,$FechLimiteRegProy,$TerminoHack,$Imagen){
	 		$id=sanitizar($id);
	 		$Edicion=sanitizar($Edicion);
	 		$InicioHackaton=sanitizar($InicioHackaton);
	 		$FechLimiteRegProy=sanitizar($FechLimiteRegProy);
	 		$TerminoHack=sanitizar($TerminoHack);
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();

	 		$sql="UPDATE `hackatonedicion` SET `Edicion`='$Edicion',`InicioHackaton`='$InicioHackaton',`FechLimiteRegProy`='$FechLimiteRegProy',`TerminoHack`='$TerminoHack',`Imagen`='$Imagen' WHERE `id`='$id'";  
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function EliminarHackaton($id){
	 		$id=sanitizar($id);
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `hackatonedicion` WHERE  `id`='$id'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}
	 	function CambiarEstado($idActualizar){
	 		$idActualizar=sanitizar($idActualizar);
	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		/*Deshabilitar hackatones*/
	 		$Deshabilitar="UPDATE `hackatonedicion` SET `status`='0'"; 
	 		$resultadoDeshabilitar=mysqli_query($Conexion,$Deshabilitar);
	 		/*habilitar hackaton*/
	 		$sql="UPDATE `hackatonedicion` SET `status`='1' WHERE `id`='$idActualizar'";
	 		$resultado=mysqli_query($Conexion,$sql);	  
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	
	 	function sanitizar($text){ 		
 		$variable=filter_var($text, FILTER_SANITIZE_STRING);
 		return htmlspecialchars($variable);
 	}

	 }
 