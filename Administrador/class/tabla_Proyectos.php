<?php 
 include_once("conexion.php");
	 
	 class VistaEquipos{

 
	 	function index(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `proyecto`.`NombreDeEquipo`, `proyecto`.`NombreProyecto`, CONCAT(`comunidad`.`Nombre`,' ',`comunidad`.`Apellidos`) as 'Lider', `vertical`.`Nombre`, `calificacion_final_proyecto`.`fase`, `calificacion_final_proyecto`.`calf` FROM `calificacion_final_proyecto` inner join `proyecto` on `proyecto`.`id`=`calificacion_final_proyecto`.`idproyecto` inner join `comunidad` on `proyecto`.`comunidad_id`=`comunidad`.`id` inner join `vertical` on `vertical`.`id`=`calificacion_final_proyecto`.`idvertical` inner join `hackatonedicion` on `hackatonedicion`.`id`=`calificacion_final_proyecto`.`idHack` WHERE `hackatonedicion`.`status`='1' ORDER BY `vertical`.`id`,`calificacion_final_proyecto`.`fase`,`calificacion_final_proyecto`.`calf` DESC "; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function EtapaUno($idVertical){	 
	 		$idVertical=sanitizar($idVertical);		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `proyecto`.`NombreProyecto`, `equiposfinales`.`calf` FROM `equiposfinales` inner join `proyecto` on `proyecto`.`id`=`equiposfinales`.`idproyecto` WHERE `equiposfinales`.`fase` ='1' and `equiposfinales`.`idvertical`='$idVertical' ORDER BY `equiposfinales`.`calf` DESC "; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function EtapaDos($idVertical){	 
	 		$idVertical=sanitizar($idVertical);		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `proyecto`.`NombreProyecto`, `equiposfinales`.`calf` FROM `equiposfinales` inner join `proyecto` on `proyecto`.`id`=`equiposfinales`.`idproyecto` WHERE `equiposfinales`.`fase` ='2' and `equiposfinales`.`idvertical`='$idVertical' ORDER BY `equiposfinales`.`calf` DESC ";
	 		
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	} 
	 	function EtapaTres($idVertical){	
	 		$idVertical=sanitizar($idVertical); 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `proyecto`.`NombreProyecto`, `equiposfinales`.`calf` FROM `equiposfinales` inner join `proyecto` on `proyecto`.`id`=`equiposfinales`.`idproyecto` WHERE `equiposfinales`.`fase` ='3' and `equiposfinales`.`idvertical`='$idVertical' ORDER BY `equiposfinales`.`calf` DESC ";
	 		
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	} 

	 	function sanitizar($text){ 		
 			$variable=filter_var($text, FILTER_SANITIZE_STRING);
	 		return htmlspecialchars($variable);
	 	}

	 	 

	 }
 

 ?>