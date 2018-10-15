    <?php 
        class sexo{
        	public function sex(){
        		require_once 'esqueleto-crud.php';
        		$esqueleto = new esqueleto();
        		$resultado = $esqueleto->setRead("SELECT * FROM `genero`");
        		?>

        		<select id="sexo" name = "sexo" class="form-control">
        			<option>Seleccionar sexo</option>
        			<?php
        			while($row = mysqli_fetch_array($resultado)){
        				?>
        				<option value = "<?php echo $row['idSexo'] ?>">
        				<?php echo $row['Sexo'] ?>
        				</option>
        				<?php
        			}
        			?>
        		</select>
        		<?php
        	}
        }

        $se = new sexo();
        $se->sex();

    ?>