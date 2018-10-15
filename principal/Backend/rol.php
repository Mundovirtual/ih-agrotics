<?php 
class r{
	public function seleccionRol(){
require_once 'esqueleto-crud.php';
$esqueleto = new esqueleto();
$resultado = $esqueleto->setRead("SELECT * FROM `rol`");
?>

<select id="rol" name="rol" class="form-control">
	<option>Seleccionar Rol</option>
	<?php
	while($row = mysqli_fetch_array($resultado)){
		?>
		<option value="<?php echo $row['idRol']?>"><?php echo $row['Rol']?></option>
		<?php
	}
	?>
</select> 
<?php
	}
}

$rol = new r();
$rol->seleccionRol();

?>