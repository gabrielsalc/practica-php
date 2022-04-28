<?php
	include_once('funciones.php');
	session_start();
	if (isset($_SESSION['usuario'])){
		$conexion=conectar();
		$buscar = $_POST['buscar'];
		$sql = "SELECT * FROM canciones WHERE nombre LIKE '%".$buscar."%' OR artista LIKE '%".$buscar."%' OR genero LIKE '%".$buscar."%'";
		if ($resultado = mysqli_query($conexion, $sql)){
			$valor = $_COOKIE['nombre'];
			if ($valor == 2){
				include_once('../html/encabezado2.html');
			} else {
				include_once('../html/encabezado1.html');
			}
			include("../html/principal.html");
			while ($fila = mysqli_fetch_row($resultado)){
				echo "<section><br><ul type='none'>
				<li class='list'>".$fila[1]."</li>
				<li class='list'>".$fila[2]."</li>
				<li class='list'>".$fila[3]."</li>
				<li class='list'>".$fila[4]."</li>";
			$ruta='../audio/'.$fila[6];
			if ($fila[5] != ""){
				$ruta2='../img/'.$fila[5];
			} else {
				$ruta2='../img/spotify-icon.png';
			}
			echo "<li><img src='$ruta2' alt='portada de disco' tag='portada de disco' class='portada'></li><li><audio controls class='audio'><source src='$ruta' type='audio/mpeg'></audio></li>";
			echo "</section>";
			}
		} else {
			echo "No hay resultados";
		}
	} else {
		echo "Zona Prohibida";
	}
?>