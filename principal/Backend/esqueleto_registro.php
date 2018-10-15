<?php 
class Registro{
	public function get_create($create){
		include '../conexion/abrirconexion.php';
		$con = new Conexion();
		$resultado = mysqli_query($con,$create);
	    if($resultado){
	    		echo "usuario registrado";
	    	}else{
	    		echo "Usuario no registrado :".$create;
	    	}
	}
}


?>