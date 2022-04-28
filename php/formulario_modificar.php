<?php
	session_start();
	if (isset($_SESSION['usuario'])){
		include_once("funciones.php");
		$conexion=conectar();
		$id = $_GET['id'];
		$numid="SELECT * FROM canciones WHERE id = $id";
		$resultado=mysqli_query($conexion,$numid);
		$data=mysqli_fetch_array($resultado);
		include('../html/formulario_modificar.html');
		echo "<section>
				<form action='modificar.php' method='post'>
					<fieldset>
					<h1>Modificar Canción</h1>
					<input type='hidden' name='id' value='$id'>
					<label for='nombre'>Nombre:</label>
					<input type='text' class='input' name='nombre' placeholder='Nombre de canción' value=".$data['nombre'].">
					<br><label for='artista'>Artista</label>
					<input type='text' class='input' name='artista' placeholder='Artista' value=".$data['artista'].">
					<br><label for='genero'>Género</label>
				<input type='text' class='input' name='genero' placeholder='Género' value=".$data['genero'].">
					<br><label for='fecha'>Año de publicación</label>
					<input type='number' class='input' name='fecha' placeholder='Año de publicación' value=".$data['fecha']."><br>
					<input type='submit' class='boton' name='guardar' value='Actualizar'>
					</fieldset>
				</form>
				</section><a href='inicio.php'>Volver a inicio</a>";
		desconectar($conexion);
	} else {
		echo "Zona Prohibida";
	}		
?>