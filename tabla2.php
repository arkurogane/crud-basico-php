<!DOCTYPE html>
<html>
<head>
	<title>tabla</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<style type="text/css">
	.sol{
		margin:15px;
		padding: 15px;
		margin-right: 400px;
		width: 320px;
	}
	.luna{
		width: 80px;
		border-radius: 5px;
	}
	.perro{
		width: 515px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>ACTUALIZAR FILA</h2>
				<form  method="POST" action="update.php">
					<?php
					include "conexion.php";
					$user_id=null;

					$sql1= "select id,uno,dos,tres from numeros";
					$query = $con->query($sql1);

					?>
					<?php if($query->num_rows>0):?>

						<table class="table table-bordered table-hover sol">
							<thead>
								<th >ID</th>
								<th >UNO</th>
								<th>DOS</th>
								<th>TRES</th>
							</thead>
							<?php while ($r=$query->fetch_array()):?>
								<tr>
									<td><?php echo $r["id"];
					echo '<input type="text" class="sr-only form-control" name="id[]" value="'.$r["id"].'" />';//los inputs no pueden estar disabled o no se guardan en las variables
					?></td>
					<td><?php 
					echo '<input type="text" class="form-control luna" name="uno[]" value="'.$r["uno"].'" />';
					?></td>
					<td><?php 
					echo '<input type="text" class="form-control luna" name="dos[]"  value="'.$r["dos"].'" />';
					?></td>
					<td><?php 
					echo '<input type="text" class="form-control luna" name="tres[]" value="'.$r["tres"].'" />';
					?></td>
				</tr>
				
			<?php endwhile;?>

		</table>
	<?php else:?>
		<p class="alert alert-warning">No hay resultados</p>
	<?php endif;?>
	<button type="submit" class="btn btn-success sol">guardar</button>
</form>
</div>
</div>
</div>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>INGRESAR NUEVA FILA</h2>

			<div class="modal-body">
				<form role="form" method="post" action="insert.php">

					<div class="form-group">
						<label>UNO</label>
						<input type="text" class="form-control" name="one" required>
					</div>

					<div class="form-group">
						<label>DOS</label>
						<input type="text" class="form-control" name="two" required>
					</div>

					<div class="form-group">
						<label >TRES</label>
						<input type="text" class="form-control" name="tree" required>
					</div>
					<button type="submit"  class="btn btn-danger perro">Guardar</button>
				</form>
			</div>

		</div>
	</div>
</div>
</body>
</html>