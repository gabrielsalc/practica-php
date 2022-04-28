<?php
	session_start();
	if (isset($_SESSION['usuario'])){
		include_once("funciones.php");
		$conexion=conectar();
		$id = $_GET['id'];
		$selecciona="SELECT * FROM canciones WHERE id = $id";
		$resultado=mysqli_query($conexion,$selecciona);
		$data = mysqli_fetch_array($resultado);
		$nombre = $data['nombre'];
		echo "<section>
				<form action='borrar.php' method='post'>
					<h3>Eliminar Canción</h3>
					<p>¿Seguro que desea borrar ".$nombre."?</p>
					<input type='submit' name='input' value='SI'>
					<input type='submit' name='input' value='NO'>
					<input type='hidden' name='id' value='$id'>
				</form>
			</section>";
	} else {
		echo "Zona Prohibida";
	}
?>