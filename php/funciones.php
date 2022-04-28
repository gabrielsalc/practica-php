<?php

 function conectar()
 {
 	$conexion = mysqli_connect('localhost', 'root', '', 'spotify');

 	if ($conexion) {
 		return $conexion;
 	}
 	else{
 		echo "error de conexion";
 	}
 }

 function desconectar($conexion){
 	$desconectar = mysqli_close($conexion);
 	return $desconectar;
 }
?>