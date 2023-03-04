<?php
$conexion= mysqli_connect("localhost" , "root", "" ,"control_de_actores");
if (!$conexion){
	echo 'Error al conectar a la base de datos';
}
else {
	echo '.';
}

