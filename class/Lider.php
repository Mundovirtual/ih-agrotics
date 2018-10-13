<?php 
	 include_once("conexion.php");
	 
	 class Lider{

	 	function mostrarDatos($Id){
	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `comunidad`.`id`, `comunidad`.`Nombre`, `comunidad`.`Apellidos`, `comunidad`.`E-mail`, `comunidad`.`psw`, `comunidad`.`Celular`, `talla_playera`.`Talla_Playeracol`, `carrera`.`Carrera`, `institucion`.`Institucion`, `comunidad`.`Facebook`, `comunidad`.`Twitter`, `comunidad`.`FechaNacimiento`, `comunidad`.`Habilidades`, `comunidad`.`Hobbies` FROM `comunidad` inner join `talla_playera` on `talla_playera`.`idTalla_Playera`=`comunidad`.`Talla_Playera_idTalla_Playera` inner join `carrera` on `comunidad`.`Carrera_id`=`carrera`.`id` inner join `institucion` on `institucion`.`id`=`comunidad`.`Institucion_id` where `comunidad`.`id`='$Id'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
 
	 	function ActualizarDatosLider($id,$Nombre,$Apellidos,$Correo,$Psw,$Celular,$Playera,$Carrera,$Institucion,$fcb,$twt,$Habilidades,$Hobbies){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `comunidad` SET  `Nombre`='$Nombre',`Apellidos`='$Apellidos',`E-mail`='$Correo',`psw`='$Psw',`Celular`='$Celular',`Talla_Playera_idTalla_Playera`='$Playera',`Carrera_id`='$Carrera',`Institucion_id`='$Institucion',`Facebook`='$fcb',`Twitter`='$twt',`Habilidades`='$Habilidades',`Hobbies`='$Hobbies' where `id`='$id'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 

	 }
 
 ?>