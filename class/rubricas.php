<?php 
 include_once("conexion.php");
	 
	 class rubricas{

	 	function mostrarRubricas($idvertical){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
			$sql = "SELECT `idPreguntas`, `Pregunta` FROM `rubricas` WHERE `Vertical_id`='$idvertical'";  
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function InsertarCalificacion($Juez,$idProyecto,$idFase,$idRubrica,$calf){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="INSERT INTO `evaluacion`( `Comunidad_id`, `Proyecto_id`, `Fases_idFases`, `Rubricas_idPreguntas`, `calif`) VALUES ('$Juez','$idProyecto','$idFase','$idRubrica','$calf')";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}
 
 
 

	 }
 

 ?>