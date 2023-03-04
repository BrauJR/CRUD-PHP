<?php
   include("conexion.php");
   $actores = "SELECT * FROM actores";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Página principal</title>
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
   
   <div class="container-add">
     <h2 class="container--title">Registrar Actor</h2>
     <form action="insertar.php" method="post" class="container--form">
       <label for="" class="container--label">Nombre: </label>
       <input name="nombre" type="text" class="container--input">
       <label for="" class="container--label">Dirección: </label>
       <input name="direccion" type="text" class="container--input">
       <label for="" class="container--label">Teléfono: </label>
       <input name="telefono" type="text" class="container--input">
       <label for="" class="container--label">Sexo: </label>
       <input name="sexo" type="text" class="container--input">
       <label for="" class="container--label">Estado Civil: </label>
       <input name="estadoCivil" type="text" class="container--input">
       <input class="container--submit" type="submit" value="Registrar">
     </form>
</div>
<div align="center">
  <table width="20%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="Edu (39).png" width="320" height="235" /></td>
      <td><img src="Edu (1).gif" width="720" height="405" /></td>
      <td><img src="Edu (39).png" width="320" height="235" /></td>
    </tr>
  </table>
     
     
     
</div>
<div class="container-table">
  <div class="table--title">Datos de Actores <a href="actualizar.php" class="tituloActualizar">Actualizar/Eliminar</a></div>
     <div class="table--header">Nombre</div>
     <div class="table--header">Dirección</div>
     <div class="table--header">Teléfono</div>
     <div class="table--header">Sexo</div>
     <div class="table--header">Estado Civil</div>
     <?php $resultado = mysqli_query($conexion , $actores);
	 
	 while($row=mysqli_fetch_assoc($resultado)) { ?>
     <div class="table--item"><?php echo $row["Nombre"];?></div>
     <div class="table--item"><?php echo $row["Direccion"];?></div>
     <div class="table--item"><?php echo $row["Tel"];?></div>
     <div class="table--item"><?php echo $row["Sexo"];?></div>
     <div class="table--item"><?php echo $row["EstadoCivil"];?></div>
     <?php } mysqli_free_result($resultado); ?>
</div> 
</body>
</html>