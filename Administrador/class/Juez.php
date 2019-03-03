<?php 
include_once("conexion.php");
	 class Juez{
	 	/*Modulo slolicitud Jueces*/
	 	function MostrarJuezPorActivar(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `comunidad`.`id`, `comunidad`.`Nombre`, `comunidad`.`Apellidos`, `comunidad`.`E-mail`, `comunidad`.`psw`, `comunidad`.`Celular`, `talla_playera`.`Talla_Playeracol`, `carrera`.`Carrera` , `institucion`.`Institucion`, `comunidad`.`Facebook`, `comunidad`.`Twitter`, `comunidad`.`FechaNacimiento`, `comunidad`.`Habilidades`, `comunidad`.`Hobbies`, `comunidad`.`Rol_idRol`, `genero`.`Sexo`, `comunidad`.`status` FROM `comunidad` inner join `talla_playera` on `talla_playera`.`idTalla_Playera`=`comunidad`.`Talla_Playera_idTalla_Playera` inner join `carrera` on `carrera`.`id`=`comunidad`.`Carrera_id` inner join `institucion` on `comunidad`.`Institucion_id`=`institucion`.`id` inner join `genero` on `genero`.`idSexo`=`comunidad`.`Genero_idSexo` where `Rol_idRol`='3' and `status`='0'"; 
	 		 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function MostrarJuezActivados(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT * FROM `comunidad` WHERE `Rol_idRol`='3' and `status`='1'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function EliminarSolicitudJuez($id){
	 		$id=sanitizar($id); 		 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `comunidad` WHERE `id`='".$id."' and `Rol_idRol`='3'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}
		 
	 	function aceptarSolicitud($id){	
	 		$id=sanitizar($id); 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `comunidad` set `status`='1' WHERE `id`='".$id."' and `Rol_idRol`='3'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function JuecesAceptados(){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
 		$sql="SELECT `comunidad`.`id`, `comunidad`.`Nombre`, `comunidad`.`Apellidos`, `comunidad`.`E-mail`, `comunidad`.`psw`, `comunidad`.`Celular`, `talla_playera`.`Talla_Playeracol`, `carrera`.`Carrera` , `institucion`.`Institucion`, `comunidad`.`Facebook`, `comunidad`.`Twitter`, `comunidad`.`FechaNacimiento`, `comunidad`.`Habilidades`, `comunidad`.`Hobbies`, `comunidad`.`Rol_idRol`, `genero`.`Sexo`, `comunidad`.`status` FROM `comunidad` inner join `talla_playera` on `talla_playera`.`idTalla_Playera`=`comunidad`.`Talla_Playera_idTalla_Playera` inner join `carrera` on `carrera`.`id`=`comunidad`.`Carrera_id` inner join `institucion` on `comunidad`.`Institucion_id`=`institucion`.`id` inner join `genero` on `genero`.`idSexo`=`comunidad`.`Genero_idSexo` where `Rol_idRol`='3' and `status`='1'";  
 			$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 	}
	 	function ActualizarDatosJueces($id,$correo,$psw,$celular){
	 	    $id=sanitizar($id);
	 	    $correo=sanitizar($correo);
	 	    $psw=sanitizar($psw);
	 	    $celular =sanitizar($celular);

	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `comunidad` SET `E-mail`='$correo',`psw`='$psw',`Celular`='$celular' WHERE `id`='$id' and `Rol_idRol`='3' and `status`='1'"; 
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