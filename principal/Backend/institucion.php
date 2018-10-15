	<?php
	     class Int{
	     	public function vis(){
	     		require 'esqueleto-crud.php';
	             $esqueleto = new esqueleto();
	             $resultado = $esqueleto->setRead("SELECT `id`, `Institucion` FROM `institucion`");
			     ?>
			     <div class="input-group">
			     <span class="input-group-addon btn btn-danger" data-toggle = "modal" id="" data-target = "#miModal"><i class="fas fa-external-link-alt fa-1x">Agregar</i></span>
			     <select id="institucion" name="institucion" class="form-control">
				   <option>Seleccionar Institucion</option>
				     <?php 
					while ($row = mysqli_fetch_array($resultado)) {
						?>
						     <option value="<?php echo($row['id']) ?>"><?php echo(utf8_encode( $row['Institucion'])) ?></option>
					      <?php
					    }
				        ?>
			    </select>
			    </div>
			<?php
	     	}
	     	
	     }


	     $inst = new Int();
	     $inst->vis();

	  
	    		 
	 
	 
	 
	?>
