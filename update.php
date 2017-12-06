<?php
 include "conexion.php";
//variables recibidas por POST

$id 			=isset($_POST['id']) ? $_POST['id'] : '';
$uno			=isset($_POST['uno']) ? $_POST['uno'] : '';
$dos			=isset($_POST['dos']) ? $_POST['dos'] : '';
$tres 			=isset($_POST['tres']) ? $_POST['tres'] : '';
$i 				=0;

for($i=0;$i<sizeof($id);++$i)
{

	//echo "<br>". "update numeros set uno=$uno[$i],dos=$dos[$i],tres=$tres[$i] where id=$id[$i]";
	$sql ="update numeros set uno='$uno[$i]',dos='$dos[$i]',tres='$tres[$i]' where id=$id[$i]";
	$query = $con->query($sql);
}

print "<script>alert(\"Actualizado Exitosamente.\");window.location='tabla2.php';</script>";

?>
