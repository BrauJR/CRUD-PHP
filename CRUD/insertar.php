<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];
$estadoCivil = $_POST["estadoCivil"];

$insertar = "INSERT INTO actores(Nombre, Direccion, Tel, Sexo, EstadoCivil) VALUES ('$nombre', '$direccion', '$telefono', '$sexo', '$estadoCivil')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
	echo "<script>alert('Se ha registrado el Actor con éxito');
	window.location='/Unidad4'</script>";
}else{
	echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}








