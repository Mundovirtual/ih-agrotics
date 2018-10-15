  <?php 

     class guardar{
     	 function __construct() {
         $this->institucion = $_POST["i"];
       }

     	 public function guardarInstitucion(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(empty($_POST["i"])){
            ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
                         <strong> Rellenar el campo Institución !</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                          </button>
            </div>
            <?php
          }else{
             require_once 'esqueleto-crud.php';
          $esqueleto = new esqueleto();
          $sql = "INSERT INTO `institucion`(`id`, `Institucion`) VALUES (null,'$this->institucion')";
          $resultado = $esqueleto->setRead($sql);
          if($resultado){
            ?>
                           <div class="alert alert-success alert-dismissible fade show text-center" role="alert"><i class="fas fa-check"></i>
                                <strong>Institucion registrado!</strong>
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                          <?php
          }else{
            ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
                         <strong> Error al registrar la institucion !</strong>
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

  $g = new guardar();
  $g->guardarInstitucion();


  ?>


