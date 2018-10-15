<?php
    session_start();
	session_destroy(); 
	header("location:../../miperfil.php");
	exit(); 
?>