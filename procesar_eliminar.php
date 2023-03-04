<?php
include("conexion.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM actores WHERE id_Actor = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);
 
if($resultadoEliminar){
	header("Location: actualizar.php");
}else{
	echo "<script>alert('¡No se pudo eliminar!');window.history.go(-1);</script>";
}

