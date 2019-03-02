<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Carrera</title>
</head>
<body>
  <?php 
      class Carrera{
        public function car(){
          require_once 'esqueleto-crud.php';
          $esqueleto = new registro();

          $resultado = $esqueleto->InsertarRegistro("SELECT * FROM `carrera`");
          ?>
          <div class="input-group">
          <select id="carrera" name="carrera" class="form-control">
            <option value="0">-- Seleccionar Carrera --</option>
            <?php

            while($row = mysqli_fetch_array($resultado)){
              ?>
              <option value="<?php echo ($row['id']) ?>">
                <?php echo (utf8_encode($row['Carrera'] ))?>
              </option>
              <?php
            }
            ?>
          </select>
          </div>
          <?php
        }
      }

      $car = new Carrera();
      $car->car();
    ?>

    <script type="text/javascript">
      $("#carrera").click(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturadoi = document.getElementById('carrera').value;
          if (capturadoi>0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });
  </script>
</body>
</html>