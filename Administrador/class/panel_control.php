
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
	 	 

	 	function Actualizar($id,$fase){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `infconfiguracion` SET `Estatus_idEstatus`='$fase' WHERE `Id`='$id'";  
	 		$resultado=mysqli_query($Conexion,$sql); 
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function NumeroPorFase($fase){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT  `infconfiguracion`.`EquiposLimite` FROM `infconfiguracion` inner join `hackatonedicion` on `hackatonedicion`.`id`=`infconfiguracion`.`HackatonEdicion_id` where  `infconfiguracion`.`Fases_idFases` ='$fase' and `hackatonedicion`.`status`='1'  ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();

	 	}
	 	function verticales(){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `vertical`.`id` FROM `vertical` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` WHERE `hackatonedicion`.`status`=1 ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
 
	 	}
	 	function Calificar($idvertical,$fase,$limite){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `calificacion_final_proyecto`.`idproyecto`, `calificacion_final_proyecto`.`idvertical`, `calificacion_final_proyecto`.`idHack`, `calificacion_final_proyecto`.`fase`, `calificacion_final_proyecto`.`calf` FROM `calificacion_final_proyecto` inner join `hackatonedicion` on `hackatonedicion`.`id`=`calificacion_final_proyecto`.`idHack` WHERE `hackatonedicion`.`status`='1' and `calificacion_final_proyecto`.`idvertical`='$idvertical' and `calificacion_final_proyecto`.`fase`= '$fase' ORDER BY `calificacion_final_proyecto`.`calf` desc limit $limite  "; 

	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
 
	 	}
	 	function Update($idproyecto,$fase){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `proyecto` SET  `fase`= '$fase' WHERE `id`='$idproyecto'"; 
	 	 	$resultado=mysqli_query($Conexion,$sql); 
	 		return $resultado;
	 		$Conexion->mysql_close();
 
	 	}
	 	function guardarDatos($idProyecto,$idvertical,$idhack,$fase,$calf){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="INSERT INTO `equiposfinales`(`idproyecto`, `idvertical`, `idhack`, `fase`, `calf`) VALUES ('$idProyecto','$idvertical','$idhack','$fase','$calf')"; 
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