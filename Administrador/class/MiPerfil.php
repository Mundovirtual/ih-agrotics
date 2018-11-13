 
 
<?php 
	 include_once("conexion.php");
	 
	 class comunidad{

	 	function mostrarDatos($Id){
	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
  	 		$sql="SELECT * FROM `admin` WHERE `id`='$Id'";
 	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
 
	 	function ActualizarDatosHacker($id,$Email,$usr,$psw){ 
	 		$con=new Conectar();
	 		$Conexion=$con->conexion(); 
 	 		$sql="UPDATE `admin` set `Correo`='$Email',`Usuario`='$usr',`psw`='$psw'  WHERE `id`='$id'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();

	 	}

	 

	 }
 
 ?>