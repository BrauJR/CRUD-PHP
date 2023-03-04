<?php
   include("conexion.php");
   $id = $_GET["id"];
   $actores = "SELECT * FROM actores WHERE id_Actor = '$id'";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Página actualizar</title>
<link rel="stylesheet" href="estilos.css">
<style type="text/css">
body {
	background-image: url();
	background-repeat: no-repeat;
	background-color: #E7ECEF;
}
</style>
</head>

<body>
<marquee direction="right"behavior="alternate" bgcolor="#284178">
<p><font face="Arial, Helvetica, sans-serif" size=8 color="#FFFFFF">
 CONTROL DE ACTORES 
</font></p>
</marquee>
   
<form class="container-table container-table--edit" action="procesar_actualizar.php" method="post">
  <div class="table--title table--title--edit">Datos de Actores </div>
     <div class="table--header">Nombre</div>
     <div class="table--header">Dirección</div>
     <div class="table--header">Teléfono</div>
     <div class="table--header">Sexo</div>
     <div class="table--header">Estado Civil</div>
     <div class="table--header">Operación</div>
     <?php $resultado = mysqli_query($conexion , $actores);
	 
	 
	 while($row=mysqli_fetch_assoc($resultado)) { ?>
     <input type= "hidden" class="table--item" value = "<?php echo $row["id_Actor"];?>" name = "id">
     <input type= "text" class="table--input" value = "<?php echo $row["Nombre"];?>" name = "nombre">
     <input type= "text" class="table--input" value = "<?php echo $row["Direccion"];?>" name = "direccion">
     <input type= "text" class="table--input" value = "<?php echo $row["Tel"];?>" name = "telefono">
     <input type= "text" class="table--input" value = "<?php echo $row["Sexo"];?>" name = "sexo">
     <input type= "text" class="table--input" value = "<?php echo $row["EstadoCivil"];?>" name = "estadoCivil">
     <?php } mysqli_free_result($resultado); ?>
     <input type="submit" value="Actualizar" class="container--submit container--submit--actualizar"  />
</form>
</body>
</html>