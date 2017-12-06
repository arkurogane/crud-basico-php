<?php
include "conexion.php";

$one			=isset($_POST['one']) ? $_POST['one'] : '';
$two			=isset($_POST['two']) ? $_POST['two'] : '';
$tree 			=isset($_POST['tree']) ? $_POST['tree'] : '';


///echo "insert into numeros(uno,dos,tres) values ('$one','$two','$tree')";
$sql = "insert into numeros(uno,dos,tres) values ('$one','$two','$tree')";
$query = $con->query($sql);
if($query!=null){
	print "<script>alert(\"Actualizado Exitosamente.\");window.location='tabla2.php';</script>";
}else{
	print "<script>alert(\"No se pudo agregar.\");window.location='tabla2.php';</script>";

}




?>