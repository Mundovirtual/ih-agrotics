<?php 
 
class Conectar{
 
private $servidor="localhost";
		private $usuario="root";
		private $bd="hack";
		private $password="";
		 
 
		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			$conexion->query("SET NAMES 'utf8';");

			return $conexion;
		}

	}
 
?>