 <?php
	 
session_start();   
if (!isset($_SESSION['Administrador']) and $_SESSION['Administrador']!='Administrador') {
	header("location:../index.php");
	exit;
}
 
	 
?>
