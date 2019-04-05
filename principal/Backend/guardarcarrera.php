
<?php

class guardar1
{
    public function __construct()
    {
        $this->carrera = $_POST["ca"];
    }

    public function guardarCarrera()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($this->carrera)) {
                ?>
                   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                           <strong> Rellenar el campo Carrera :(</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                   </div>
                <?php
            } else if(strlen($this->carrera)<=10){
                ?>
                   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
                        <strong> Longitud mayor a 10 !</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                   </div>
                <?php
            }
            else {
                require_once 'esqueleto-crud.php';
                $esqueleto = new registro();
                $convertir = utf8_decode($this->carrera);
                $sql       = "INSERT INTO `carrera`(`id`, `Carrera`) VALUES (null,'$convertir')";
                $resultado = $esqueleto->InsertarRegistro($sql);
                if ($resultado) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert"><i class="fas fa-check"></i>
                                  <strong>Carrera registrada!</strong>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                        </div>
                    <?php
                } else {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
                             <strong> Error al registrar la Carrera !</strong>
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                        </div>
                    <?php
                }

            }
        }
    }
}

$car = new guardar1();
$car->guardarCarrera();

?>