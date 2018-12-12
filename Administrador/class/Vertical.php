<?php 
	 include_once("conexion.php");
	 
	 class Vertical{

	 	function mostrarDatos(){
	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `vertical` .`id`, `vertical` .`Nombre`, `vertical`.`Descripcion`, `vertical` .`InfAsesoria`, `vertical` .`HackatonEdicion_id` as 'veH',`hackatonedicion`.`id` as 'iH', `hackatonedicion`.`Edicion` as 'eH' FROM `vertical` inner join `hackatonedicion`on `hackatonedicion`.`id`=`vertical` .`HackatonEdicion_id` where `hackatonedicion`.`status`='1'";

	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	/*Fases*/
	 	function mostrarFases(){
	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `idFases`, `pitch` FROM `fases`";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function InsertarVertical($Vertical,$Descripcion,$asesoria,$Hackaton){
	 		$Vertical=sanitizar($Vertical);
	 		$Descripcion=sanitizar($Descripcion);
	 		$asesoria=sanitizar($asesoria);
	 		$Hackaton=sanitizar($Hackaton);

	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="INSERT INTO `vertical`(`Nombre`, `Descripcion`, `InfAsesoria`, `HackatonEdicion_id`) VALUES ('$Vertical','$Descripcion','$asesoria','$Hackaton')";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		if ($resultado=true) {
	 			return true;
	 		} 

	 		$Conexion->mysql_close();
	 	}

	 	function ActualizarVertical($id,$Nombre,$Descripcion,$asesoria,$Hackaton){
	 		$id=sanitizar($id);
	 		$Nombre=sanitizar($Nombre);
	 		$Descripcion=sanitizar($Descripcion);
	 		$asesoria=sanitizar($asesoria);
	 		$Hackaton=sanitizar($Hackaton);

	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `vertical` SET `Nombre`='$Nombre',`Descripcion`='$Descripcion',`InfAsesoria`='$asesoria',`HackatonEdicion_id`='$Hackaton' WHERE `id`='$id'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		if ($resultado=true) {
	 			return true;
	 		} 
	 		$Conexion->mysql_close();
	 	}

	 	function EliminarVertical($id){

	 		$id=sanitizar($id);

	 		$con=new Conectar();
	 		$Conexion=$con->conexion();

	 		$sql="DELETE FROM `vertical` WHERE `id`='$id'"; 
	 		$resultado=mysqli_query($Conexion,$sql); 
	 		if ($resultado==true) {
	 			return true;
	 		} 
	 		$Conexion->mysql_close();
	 	}

 
	 }
 
	function sanitizar($text){ 		
  		return filter_var($text, FILTER_SANITIZE_STRING);
 	}  
 
 
 ?>