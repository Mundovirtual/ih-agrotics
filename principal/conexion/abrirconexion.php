<?php 
class Conexion extends mysqli
{
 private $HOST = "localhost";
    private $USER = "root";
    private $BASE = "hacky";
    private $PASS = "InnovaHack18"; 
     
    public function __construct()
    {
        parent::__construct($this->HOST, $this->USER, $this->PASS, $this->BASE);
        $this->connect_errno ? die("Error en la conexion" . mysqli_errno()) : $m = 'Conectado';
    }

}
 
?>
