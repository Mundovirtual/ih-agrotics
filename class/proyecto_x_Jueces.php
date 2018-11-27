<?php 
include_once("conexion.php");

 class Calf_x_Juez{

	 	function index($id){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `proyecto`.`NombreDeEquipo`, `proyecto`.`NombreProyecto`, `vertical`.`Descripcion`, concat(`comunidad`.`Nombre`,' ',`comunidad`.`Apellidos`) as 'Nombre', `calificacion_x_juez`.`fase`, `calificacion_x_juez`.`calfi` FROM `calificacion_x_juez` inner join `proyecto` on `proyecto`.`id`=`calificacion_x_juez`.`idproyecto` inner join `vertical` on `vertical`.`id`=`calificacion_x_juez`.`idvertical` inner join `hackatonedicion` on `hackatonedicion`.`id`=`calificacion_x_juez`.`idHack` inner join `comunidad` on `comunidad`.`id`=`calificacion_x_juez`.`juez` WHERE `hackatonedicion`.`status`='1' AND `calificacion_x_juez`.`juez` ='$id' ORDER BY `calificacion_x_juez`.`fase` ,`calificacion_x_juez`.`idvertical`, `calificacion_x_juez`.`calfi` desc   ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	}
 

 ?>