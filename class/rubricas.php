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
 
 
 

	 }
 

 ?>