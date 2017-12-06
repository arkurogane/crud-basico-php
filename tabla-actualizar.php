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
				<form  method="POST" action="php/update.php">
					<?php
					include "php/conexion.php";
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
								<th>ELIMINAR</th>
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
					<td style="width:150px;">
						<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
						<script>
							$("#del-"+<?php echo $r["id"];?>).click(function(e){
								e.preventDefault();
								p = confirm("Estas seguro?");
								if(p){
									window.location="php/eliminar.php?id="+<?php echo $r["id"];?>;

								}

							});
						</script>
					</td>
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
</body>
</html>