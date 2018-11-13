 
<?php 
	 include_once("conexion.php");
	 
	 class comunidad{

	 	function mostrarDatos($Id){
	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `comunidad`.`id`, `comunidad`.`Nombre`, `comunidad`.`Apellidos`, `comunidad`.`E-mail`, `comunidad`.`psw`, `comunidad`.`Celular`, `talla_playera`.`TallaCompleta`, `carrera`.`Carrera`, `institucion`.`Institucion`, `comunidad`.`Facebook`, `comunidad`.`Twitter`, `comunidad`.`FechaNacimiento`, `comunidad`.`Habilidades`, `comunidad`.`Hobbies`,`comunidad`.`Talla_Playera_idTalla_Playera` FROM `comunidad` inner join `talla_playera` on `talla_playera`.`idTalla_Playera`=`comunidad`.`Talla_Playera_idTalla_Playera` inner join `carrera` on `comunidad`.`Carrera_id`=`carrera`.`id` inner join `institucion` on `institucion`.`id`=`comunidad`.`Institucion_id` where `comunidad`.`id`='$Id'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
 
	 	function ActualizarDatosHacker($id,$Email,$psw,$Celular){ 
	 		$con=new Conectar();
	 		$Conexion=$con->conexion(); 
 	 		$sql="UPDATE `comunidad` SET `E-mail`='$Email',`psw`='$psw',`Celular`='$Celular'  WHERE `id`='$id'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();

	 	}

	 

	 }
 
 ?>