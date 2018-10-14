<?php 
 include_once("conexion.php");
	 
	 class Proyecto{

	 	function MostrarProyectoPorLider($idLider){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql = "SELECT `id`,`Nombre`,`Apellidos`,`E-mail`,`Celular`,`Carrera`,`Institucion`, `FechaNacimiento`, `Habilidades`, `Hobbies`, `IDlider`, `NombreDeEquipo`, `NombreProyecto`, `NVertical`, `VDesc`, `VAsesoria` , `HStatus` FROM `detalleequipo`  where `HStatus`='1' and `IDlider`='$idLider'";  
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function existe($idLider){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `IDlider`, `HStatus` FROM `detalleequipo` WHERE `IDlider`='$idLider' and `HStatus`='1' ";
	 		$resultado=mysqli_query($Conexion,$sql); 
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function RegistrarProyecto($idLider,$NombreEquipo,$NombreProyecto,$VerticalId,$Descripcion){

	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="INSERT INTO `proyecto`(`comunidad_id`, `NombreDeEquipo`, `NombreProyecto`, `Vertical_id`, `Descripcion`, `FechaRegistro`) VALUES ('$idLider','$NombreEquipo','$NombreProyecto','$VerticalId','$Descripcion',current_date())";  
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function ActualizarProyecto($IdProyecto,$NombreEquipo,$NombreProyecto,$VerticalId,$Descripcion){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();

	 		$sql="UPDATE `proyecto` SET `NombreDeEquipo`='$NombreDeEquipo',`NombreProyecto`='$NombreProyecto',`Vertical_id`='$VerticalId',`Descripcion`='$Descripcion' WHERE `id`='$IdProyecto' ";  
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}
	 	function Verticales(){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql = "SELECT `vertical`.`id`, `vertical`.`Nombre`, `vertical`.`Descripcion`, `vertical`.`InfAsesoria`, `vertical`.`HackatonEdicion_id`, `hackatonedicion`.`id`, `hackatonedicion`.`status` FROM `vertical` inner join `hackatonedicion` on `hackatonedicion`.`id`=`vertical`.`HackatonEdicion_id` where `hackatonedicion`.`status` ='1' "; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return   mysqli_fetch_all($resultado);;
	 		$Conexion->mysql_close();
	 	}
 

	 }
 

 ?>