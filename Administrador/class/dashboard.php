<?php 
 include_once("conexion.php");
	 
	 class dashboard{
	 	function chicasComunidad(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT `comunidad`.`id` FROM `comunidad` inner join `hackatonedicion` on `hackatonedicion`.`id`=`comunidad`.`hackaton` WHERE `hackatonedicion`.`status`='1' and `comunidad`.`Talla_Playera_idTalla_Playera`='12' and `comunidad`.`Rol_idRol` !='3' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	} 
	 	function MedianasComunidad(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT `comunidad`.`id` FROM `comunidad` inner join `hackatonedicion` on `hackatonedicion`.`id`=`comunidad`.`hackaton` WHERE `hackatonedicion`.`status`='1' and `comunidad`.`Talla_Playera_idTalla_Playera`='17' and `comunidad`.`Rol_idRol` !='3'  ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	} 
	 	function GrandesComunidad(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT `comunidad`.`id` FROM `comunidad` inner join `hackatonedicion` on `hackatonedicion`.`id`=`comunidad`.`hackaton` WHERE `hackatonedicion`.`status`='1' and `comunidad`.`Talla_Playera_idTalla_Playera`='18' and `comunidad`.`Rol_idRol` !='3' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	} 
	 	function ExtGrandesComunidad(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT `comunidad`.`id` FROM `comunidad` inner join `hackatonedicion` on `hackatonedicion`.`id`=`comunidad`.`hackaton` WHERE `hackatonedicion`.`status`='1' and `comunidad`.`Talla_Playera_idTalla_Playera`='19' and `comunidad`.`Rol_idRol` !='3' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	/*Mentores*/
	 	 function chicasMentores(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT `comunidad`.`id` FROM `comunidad` inner join `hackatonedicion` on `hackatonedicion`.`id`=`comunidad`.`hackaton` WHERE `hackatonedicion`.`status`='1' and `comunidad`.`Talla_Playera_idTalla_Playera`='12' and `comunidad`.`Rol_idRol` ='3' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	} 
	 	function MedianasMentores(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT `comunidad`.`id` FROM `comunidad` inner join `hackatonedicion` on `hackatonedicion`.`id`=`comunidad`.`hackaton` WHERE `hackatonedicion`.`status`='1' and `comunidad`.`Talla_Playera_idTalla_Playera`='17' and `comunidad`.`Rol_idRol` ='3'  ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	} 
	 	function GrandesMentores(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT `comunidad`.`id` FROM `comunidad` inner join `hackatonedicion` on `hackatonedicion`.`id`=`comunidad`.`hackaton` WHERE `hackatonedicion`.`status`='1' and `comunidad`.`Talla_Playera_idTalla_Playera`='18' and `comunidad`.`Rol_idRol` ='3' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	} 
	 	function ExtGrandesMentores(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT `comunidad`.`id` FROM `comunidad` inner join `hackatonedicion` on `hackatonedicion`.`id`=`comunidad`.`hackaton` WHERE `hackatonedicion`.`status`='1' and `comunidad`.`Talla_Playera_idTalla_Playera`='19' and `comunidad`.`Rol_idRol` ='3' ";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	/*Jueces*/
	 	function jueces(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT  `comunidad`.`id`  as 'NJueces' FROM `comunidad` inner join `hackatonedicion` on `comunidad`.`hackaton`= `hackatonedicion`.`id` WHERE `Rol_idRol`='3' and `hackatonedicion`.`status`='1'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close(); 
	 	}
	 	function comunidad(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT DISTINCT  `comunidad`.`id`  as 'NJueces' FROM `comunidad` inner join `hackatonedicion` on `comunidad`.`hackaton`= `hackatonedicion`.`id` WHERE `Rol_idRol`!='3' and `hackatonedicion`.`status`='1'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close(); 
	 	}
	 	function proyectos(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `proyecto`.`id` FROM `proyecto` inner join `vertical` on `proyecto`.`Vertical_id`= `vertical`.`id` inner join `hackatonedicion` on `vertical`.`HackatonEdicion_id`=`hackatonedicion`.`id` where `hackatonedicion`.`status`='1'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close(); 
	 	}


	 } 
?>
