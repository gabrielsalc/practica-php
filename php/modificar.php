<?php
	session_start();
	if (isset($_SESSION['usuario'])){
		include("funciones.php");
		$conexion=conectar();
		$id = $_POST['id'];
		$nombre=$_POST['nombre'];
		$artista=$_POST['artista'];
		$genero=$_POST['genero'];
		$fecha=$_POST['fecha'];
		$modifica="UPDATE canciones SET nombre='$nombre',artista='$artista',genero='$genero', fecha='$fecha' WHERE id = $id";
		$resultado=mysqli_query($conexion,$modifica);
		if($resultado){
			echo "Los datos fueron modificados.Aguarde un Momento...";
			header("Refresh:3, url='inicio.php'");
		}
		else{
			echo "Error, los datos no fueron actualizados...";
			header("Refresh:3, url=inicio.php'");
		}
		desconectar($conexion);
	} else {
		echo "Zona Prohibida";
	}
?>