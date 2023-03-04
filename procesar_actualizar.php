<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$estadoCivil = $_POST['estadoCivil'];

$actualizar = "UPDATE actores SET Nombre='$nombre', Direccion = '$direccion', Tel = '$telefono', Sexo = '$sexo', EstadoCivil = '$estadoCivil' WHERE id_Actor = '$id'";

$resultado = mysqli_query($conexion, $actualizar);

if($resultado){
	echo "<script>alert('¡Se han actualizado los cambios correctamente!');
	window.location='/Unidad4'</script>";
}else{
	echo "<script>alert('¡No se pudo actualizar!');window.history.go(-1);</script>";
}

