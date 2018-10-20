<?php
    require_once '../conexion/abrirconexion.php';
    class registro 
    {

    	function InsertarRegistro($sql){
    		$con = new Conexion();
    		$resultado = mysqli_query($con,$sql);
    		return $resultado;
    	}


    	
    	 
    }
 ?>