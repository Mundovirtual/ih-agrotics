<?php 
 
class Conectar{
  
	private $servidor="localhost";
		private $usuario="root";
		private $bd="innonahack";
		private $password="InnovaHack18";
		 
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