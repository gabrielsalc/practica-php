<?php
	include_once('../php/funciones.php');
	include_once("../html/bienvenido.html");
	$conexion=conectar();
	if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
		$usuario=$_POST['usuario'];
		$contraseña = md5($_POST['contraseña']);
		$pregunta="SELECT nombre, password FROM usuarios WHERE nombre='$usuario' AND password='$contraseña'";
		$responde=mysqli_query($conexion,$pregunta);
		$recFilas=mysqli_num_rows($responde);

		if ($recFilas>0) {
			session_start();
			$_SESSION['usuario'] = $usuario;
			header("Refresh:1, url='inicio.php'");
		}
			else{
				$resultado=mysqli_query($conexion,$pregunta);
					echo "<script>window.alert('Usuario o contraseña incorrectos')</script>";
				}
		}
	desconectar($conexion);
?>