<?php 
 include_once("conexion.php");
	 
	 class rubricas{

	 	function index(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `rubricas`.`idPreguntas`, `rubricas`.`Pregunta`, `vertical`.`Nombre`, `hackatonedicion`.`Edicion` FROM `rubricas` inner join `vertical` on `rubricas`.`Vertical_id`=`vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` WHERE `hackatonedicion`.`status`='1' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	 
	 	function Insertar($id,$preg){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="INSERT INTO `rubricas`(`Pregunta`,`Vertical_id`) VALUES ('$preg','$id')";   
	 		$resultado=mysqli_query($Conexion,$sql);	 		 
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function Actualizar($id,$Pregunta){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `rubricas` SET `Pregunta`='$Pregunta' WHERE  `idPreguntas`='$id'";   
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function eliminar($id){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `rubricas` WHERE `idPreguntas`='$id'";  
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 }
 

 ?>