 
<?php 
require_once "../../../class/proyectos.php";
 session_start();
if (isset($_POST['Validar'])) {
	 $Proyecto=new Proyecto();
	 $Siexiste=$Proyecto->existe($_SESSION['idUser']);

	 if (empty($Siexiste)) {
	 	 echo json_encode(array('Validar'=>'1'));
	 }else{
	 	$VerDatos=$Proyecto->MostrarProyectoPorLider($_SESSION['idUser']);   
	 	 echo json_encode(array('Validar'=>'0','Equipo'=>$VerDatos[0][2],'Vertical'=>$VerDatos[0][8],'Nombre'=>$VerDatos[0][3],'Descripcion'=>$VerDatos[0][5],'DescripcionVertical'=>$VerDatos[0][9],'Asesoria'=>$VerDatos[0][10]));
 
	 }
	 
}

/*Registro*/
if (isset($_POST['equipo'])&&isset($_POST['proyecto'])&&isset($_POST['descripcion'])&&isset($_POST['vertical'])) {

	$msj="";
	$error="0";
	if (strlen($_POST['equipo'])<5) {
		$msj="Equipo: Longitud mayor a 5";
		$error="1";
	     
	} else if(strlen($_POST['proyecto']) < 	5){
		$msj="Proyecto: Longitud mayor a 5";
		$error="1";
	}else if (strlen($_POST['descripcion']) < 5 ) {
		$msj="Descripcion: Longitud mayor a 5";
		 $error="1";
	}
	else if ( $_POST['vertical']=='00') {
		$msj="Selecciona una vertical";
		 $error="1";
	}else if($error=='0'){
/* RegistrarProyecto($idLider,$NombreEquipo,$NombreProyecto,$VerticalId,$Descripcion)*/
			/*Validar si no ha registrado Proyecto*/
			
			$Proyecto=new Proyecto();
			$Siexiste=$Proyecto->existe($_SESSION['idUser']); 
 		 	if (empty($Siexiste)) {
 		 		$Registrar=$Proyecto->RegistrarProyecto($_SESSION['idUser'],$_POST['equipo'],$_POST['proyecto'],$_POST['vertical'],$_POST['descripcion']);

		   		$msj='00';
 		 	}else{
 		 		$msj='01';
 		 	}
			
	}

	echo json_encode(array('Estado'=>$msj));

}


 ?>