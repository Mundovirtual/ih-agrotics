<?php
     
     $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
     		require 'esqueleto-crud.php'; 
     		$esqueleto = new esqueleto();
             $resultado = $esqueleto->setRead("SELECT `id`, `Institucion` FROM `institucion`");
		     ?>
		     <select name="institucion" id="select" class="form-control">
			   <option selected="">Seleccionar Institucion</option>
			     <?php 
				while ($row = mysqli_fetch_array($resultado)) {
					?>
					<option value="<?php echo($row['id']) ?>"><?php echo($row['Institucion']) ?></option>
				 <?php
				}
			     ?>
			      
			      
		    </select>
		<?php
     	}
 
?>
