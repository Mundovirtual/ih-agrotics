<?php 
 
class Conectar{
 
private $servidor="localhost";
		private $usuario="root";
		private $bd="hacky";
		private $password="123";
		 
 
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