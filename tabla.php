

<form  method="POST" action="update.php">
	<?php
	include "conexion.php";
	$user_id=null;

	$sql1= "select uno,dos,tres from numeros";
	$query = $con->query($sql1);

	?>
	<?php if($query->num_rows>0):?>

		<table class="table table-bordered table-hover">
			<thead>
				<th >uno</th>
				<th>dos</th>
				<th>tres</th>
			</thead>
			<?php while ($r=$query->fetch_array()):?>
				<tr>
					<td><?php  
					echo '<form>'; 
					echo '<input type="text" name="uno[]" value="'.$r["uno"].'" />';
					echo '</form>';
					?></td>
					<td><?php 
					echo '<form>'; 
					echo '<input type="text" name="dos[]"  value="'.$r["dos"].'" />';
					echo '</form>';
					?></td>
					<td><?php 
					echo '<form>'; 
					echo '<input type="text" name="tres[]" value="'.$r["tres"].'" />';
					echo '</form>';
					?></td>

				</tr>
			<?php endwhile;?>

		</table>
	<?php else:?>
		<p class="alert alert-warning">No hay resultados</p>
	<?php endif;?>
	<button type="submit"">guardar</button>

</form>