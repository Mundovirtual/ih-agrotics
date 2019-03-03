 <?php 
include_once("conexion.php");
	 class Hacker{
	 	/*Modulo solicitud Jueces*/	 
	 	function MostrarHacker(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `comunidad`.`id`, Concat(`comunidad`.`Nombre`, ' ',`comunidad`.`Apellidos`) as nombre, `comunidad`.`E-mail`, `comunidad`.`psw`, `comunidad`.`Celular`, `talla_playera`.`Talla_Playeracol` as 'playera', `carrera`.`Carrera`, `institucion`.`Institucion`, `comunidad`.`FechaNacimiento`, `comunidad`.`Habilidades`, `comunidad`.`Hobbies`, `genero`.`Sexo` FROM `comunidad` inner join `hackatonedicion` on `comunidad`.`hackaton`=`hackatonedicion`.`id` inner join `talla_playera` on `comunidad`.`Talla_Playera_idTalla_Playera`=`talla_playera`.`idTalla_Playera` inner join `carrera` on `comunidad`.`Carrera_id`=`carrera`.`id` inner join `institucion` on `institucion`.`id`=`comunidad`.`Institucion_id` inner join `genero` on `comunidad`.`Genero_idSexo`=`genero`.`idSexo` WHERE `hackatonedicion`.`status`='1' and `Rol_idRol`!='3'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return mysqli_fetch_all($resultado);
	 		
	 		$Conexion->mysql_close();
	 	}
	 	function EliminarHacker($id){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `comunidad` WHERE `id`='".$id."'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}
		 
	 
	 	function ActualizarDatosHacker($id,$Email,$psw,$Celular){ 
	 		$id=sanitizar($id);
	 		$Email=sanitizar($Email);
	 		$psw=sanitizar($psw);
	 		$Celular=sanitizar($Celular);
	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion(); 
 	 		$sql="UPDATE `comunidad` SET `E-mail`='$Email',`psw`='$psw',`Celular`='$Celular'  WHERE `id`='$id'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();

	 	}
 
	 }
	 
	 function sanitizar($text){ 		
	 		$variable=filter_var($text, FILTER_SANITIZE_STRING);
	 		return htmlspecialchars($variable);
	 	}
 

 ?>