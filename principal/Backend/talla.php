
<?php 

class tall{
  public function talll(){
	require_once 'esqueleto-crud.php';
    $esqueleto = new esqueleto();
	$resultado = $esqueleto->setRead("SELECT * FROM `talla_playera`");
	?>
	<select id="talla" name = "talla" class="form-control">
		<option>Seleccionar Talla</option>
		<?php
		while($row =mysqli_fetch_array($resultado)){
			?>
			<option value="<?php echo $row['idTalla_Playera'] ?>"><?php echo $row['Talla_Playeracol']?></option>
			<?php
		}
    ?>
	</select>
	<?php
  }
}

$ta = new tall();
$ta->talll();

?>