<?php
 include "conexion.php";
//variables recibidas por POST

$uno			=isset($_POST['uno']) ? $_POST['uno'] : '';
$dos			=isset($_POST['dos']) ? $_POST['dos'] : '';
$tres 			=isset($_POST['tres']) ? $_POST['tres'] : '';

/*for($i=0;$i<sizeof($uno);++$i)
{
	echo "<br>".$uno[$i];
	echo "<br>".$dos[$i];
	echo "<br>".$tres[$i];

}*/
foreach ($uno as $e) {
	echo "<br>". $e;
}

?>
<script>
	alert("datos modificados correctamente");
	//window.history.back();
</script>