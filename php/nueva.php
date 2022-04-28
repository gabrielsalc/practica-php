<?php
session_start();
	if (isset($_SESSION['usuario'])){
		include("funciones.php");
		$carpeta = "../audio/";
		$carpeta2 = "../img/";
		$pista = $_FILES["pista"]["name"];
		$tamaño = $_FILES["pista"]["size"];
		$portada = $_FILES["portada"]["name"];
		$origen = $_FILES["pista"]["tmp_name"];
		$origen2 = $_FILES["portada"]["tmp_name"];
		if ($tamaño > 2097152){
			echo "Archivo de Audio demasiado grande. <a href='inicio.php'>Volver a inicio</a>";
		} else {
			$destino = $carpeta.$_FILES["pista"]["name"];
			$destino2 = $carpeta2.$_FILES["portada"]["name"];
			$mover = move_uploaded_file($origen, $destino);
			$mover2 = move_uploaded_file($origen2, $destino2);
			$conexion=conectar();
			$nombre=$_POST['nombre'];
			$artista=$_POST['artista'];
			$genero=$_POST['genero'];
			$fecha=$_POST['fecha'];
			$enviar= "INSERT INTO canciones(nombre,artista,genero,fecha,pista,portada) VALUES ('$nombre','$artista','$genero','$fecha', '$pista', '$portada')";
			mysqli_query($conexion,$enviar);
			if ($enviar) {
			echo "Los datos se cargaron correctamente,por favor espere...";
			header("Refresh:3, url='inicio.php'");
			}
			desconectar($conexion);
		}
	} else {
		echo "Zona Prohibida";
	}
?>