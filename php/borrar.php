
<?php
	session_start();
	if (isset($_SESSION['usuario'])){
		include_once("funciones.php");
		$conexion=conectar();
		$boton=$_POST['input'];
		if($boton=='SI'){
			$id=$_POST['id'];
			$borrar="DELETE FROM canciones WHERE id =$id";
			$resultado=mysqli_query($conexion,$borrar);
			if ($resultado){
				echo "La Cancion fue borrada exitosamente";
				header("refresh:2, url='inicio.php'");
			}
			else{
				echo "No se pudo borrar la canción";
				header("refresh:2, url='inicio.php'");
			}		
		}
		else{
			echo "Anulando borrado:";
			header("Refresh=3, url='inicio.php'");
		}
	} else {
		echo "Zona Prohibida";
	}
?>