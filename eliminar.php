<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM numeros WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado Exitosamente.\");window.location='../php/tabla2.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../php/tabla-actualizar.php';</script>";
				print "<script>alert(\"No se pudo eliminar.\");window.location='../tabla2.php';</script>";

			}
}

?>