  <?php
include_once("../../class/Rubricas.php");

if (isset($_POST['idVertical']) && isset($_POST['Rubricas'])) {
  $id=$_POST['idVertical']; 
  $Rubricas=$_POST['Rubricas'];
  $reemplazar= str_replace('%5B%5D=', '', $Rubricas); 
  $reemplazar= str_replace('&', ',', $reemplazar);  
  $reemplazar= str_replace('rubricas', '', $reemplazar); 
  $array = explode(",", $reemplazar); 

  $msj="";
  $Aux="0";
  if ($id=='s') {
    $msj="Selecciona una vertical";
    $Aux="1";
  }
  if ($Aux!='1') {
    for ($i=0; $i <count($array) ; $i++) { 
      $rubrica= $array[$i]; 
      if ($rubrica=='') {
          $msj="Campos vacios";
          $Aux="1"; 
          break;
      }else if (strlen($rubrica)<=10) {
           $msj="Longitud menor a 10";
          $Aux="1";
          break;
      }
    }
  }
  if ($Aux=="0") {
     for ($i=0; $i <count($array) ; $i++) { 
        $rubrica= $array[$i];  
        $reg=new rubricas();
        $registrar=$reg->Insertar($id,$rubrica);
        if ($registrar=='1') {
            $msj="1";
         } 
        else{
          $msj="Ha ocurrido un error inesperado";
        }
     } 
    
  }
  echo json_encode(array('Estado'=>$msj));
}
/*          Editar                   */
if (isset($_POST['idrubrica'])&&isset($_POST['rubrica'])) {
    $msj="";
    $Aux="0";
    $id=$_POST['idrubrica'];
    $rubrica=$_POST['rubrica'];     
    $tamano= strlen($rubrica);
     
    if ($rubrica=='') {
        $msj="Criterio: Campo vacío ";
        $Aux="1";
    }else if ($tamano<=20) { 
        $msj="Criterio: Campo mayor a 20 caractères ";
        $Aux="1";
    }else if ($Aux=='0') {
      $editar=new rubricas();
      $edit=$editar->Actualizar($id,$rubrica);
      if ($edit=='1') {
         $msj="1";
      }else{
        $msj="Error inesperado";        
    }
 
      }
      echo json_encode(array('Estado'=>$msj));
}
/*                        Eliminar               */
if (isset($_POST['IdEliminar'])) {
    $msj=""; 
    $id=$_POST['IdEliminar'];     
    $eliminar= new rubricas();
    $Delete=$eliminar->eliminar($id);
    if ($Delete=='1') {
      $msj="1"; 
    }else{
      $msj="Rubrica referenciada"; 
    }
    echo json_encode(array('Estado'=>$msj));
}
 ?> 