<?php
    require_once '../conexion/abrirconexion.php';
    class registro 
    {

        function ValidarUsuario($Nombre,$Apellidos,$correo,$telefono)
        {
            $con = new Conexion();
            $sql="SELECT `Nombre`, `Apellidos`, `E-mail` , `Celular`, `hackaton` FROM `comunidad` WHERE `Nombre`='$Nombre' and `Apellidos`='$Apellidos' and `E-mail`='$correo' and `Celular`='$telefono'";
            $preresultado = mysqli_query($con,$sql);
            $resultado=mysqli_fetch_all($preresultado );
            return $resultado;
        }
    	function InsertarRegistro($sql){
    		$con = new Conexion();
    		$resultado = mysqli_query($con,$sql);
    		return $resultado;
    	}


    	
    	 
    }
 ?>