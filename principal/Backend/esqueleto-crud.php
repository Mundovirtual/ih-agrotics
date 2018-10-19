<?php
class esqueleto{
	public function setRead($sql){
		include '../conexion/abrirconexion.php';
		$con = new Conexion();
		$contenido = $con->query(mysqli_real_escape_string($con,$sql));
		return $contenido;
	} 
}	
 ?>