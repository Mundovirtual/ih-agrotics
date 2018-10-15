 <?php
	 
session_start();  
if (!isset($_SESSION['activo'])) {//SI ESTA DECLARADA Y NO ESTA ACTIVO
	header("location:../../miperfil.php");
	exit;
}
 
	 
?>