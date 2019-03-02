<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	     class Institucion{
	     	public function vis(){
	     		require 'esqueleto-crud.php';
	             $esqueleto = new registro();
	             $resultado = $esqueleto->InsertarRegistro("SELECT `id`, `Institucion` FROM `institucion`");
			     ?>
			     <div class="input-group">
			     <span class="input-group-addon btn btn-danger" data-toggle = "modal" id="" data-target = "#miModal"><i class="fas fa-external-link-alt fa-1x">Agregar</i></span>
			     <select id="institucion" name="institucion" class="form-control">
				   <option value="0">-- Seleccionar Institución--</option>
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


	     $inst = new Institucion();
	     $inst->vis();
	 
	?>

	<script type="text/javascript">
			$("#institucion").click(function() {
          var nuevoCSS = {
              "border": '1px solid #66ff33'
          };
          var error = {
              "border": '1px solid red'
          };
          var capturadoi = document.getElementById('institucion').value;
          if (capturadoi>0) {
              $(this).css(nuevoCSS);
          } else {
              $(this).css(error);
          }
      });
	</script>
	
</body>
</html>