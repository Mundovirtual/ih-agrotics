    <?php 
      class Carrera{
      	public function car(){
      		require_once 'esqueleto-crud.php';
      		$esqueleto = new esqueleto();

      		$resultado = $esqueleto->setRead("SELECT * FROM `carrera`");
      		?>
          <div class="input-group">
            <span class="input-group-addon btn btn-danger" data-toggle = "modal" id = "ca" data-target = "#ca"><i class="fas fa-external-link-alt fa-1x">Agregar</i></span>
      		<select id="carrera" name="carrera" class="form-control">
      			<option>Seleccionar Carrera</option>
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