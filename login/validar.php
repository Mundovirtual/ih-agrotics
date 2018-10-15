
<?php
  
 if (isset($_POST['Usuario']) and isset($_POST['Password']) ) {
    $user = $_POST['Usuario'];
    $passwd = $_POST['Password'];
    login($user, $passwd);
    
}
 
 function login($usr,$pss) {
	 
	$psw=md5($pss);
	include_once("../class/conexion.php");
		$con=new Conectar();
		$Conexion=$con->conexion();
		$sql="SELECT `id`, `Nombre`, `Apellidos`, `E-mail`, `psw`, `Rol_idRol`, `Genero_idSexo` FROM `comunidad`  WHERE `E-mail`='$usr'  and `psw`='$psw'"; 
 		$resultado=mysqli_query($Conexion,$sql);
 		$res = mysqli_fetch_array($resultado);
 		 
 		if (count($res)>0) {
	 
			$rol=$res['Rol_idRol']; 
 			 if ($rol=='3') {
 			 	session_start();
	 			 $_SESSION['activo'] = true;
	 			 $_SESSION['idUser'] =$res["id"] ;
				 $_SESSION['Nombre'] = $res["Nombre"]; 
				 $_SESSION['NombreApellido']=$res["Nombre"]." ".$res["Apellidos"];
				 echo json_encode(array('Estado'=>'1'));  
				 
 			 }
 			 if ($rol=='5') {/*LiderProyecto*/
 			 	session_start();
	 			 $_SESSION['activo'] = true;
	 			 $_SESSION['idUserLider'] =$res["id"] ;
				 $_SESSION['Nombre'] = $res["Nombre"]; 
				 $_SESSION['NombreApellido']=$res["Nombre"]." ".$res["Apellidos"];
				 echo json_encode(array('Estado'=>'2'));  
 			 }
 			 if ($rol=='6') { /*hacker*/
 			 	session_start();
	 			 $_SESSION['activo'] = true;
	 			 $_SESSION['idUserHacker'] =$res["id"] ;
				 $_SESSION['Nombre'] = $res["Nombre"]; 
				 $_SESSION['NombreApellido']=$res["Nombre"]." ".$res["Apellidos"];
				 echo json_encode(array('Estado'=>'3'));  
 			 }
	 
 		}else{
 			 	echo json_encode(array('Estado'=>'7'));  
 			 }
	   
		 
	 

} 
 
 
 ?>