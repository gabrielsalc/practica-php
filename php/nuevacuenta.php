<?php
		include_once('funciones.php');
		$conexion=conectar();
		$nombre=$_POST['nombre'];
		$password=$_POST['password'];
		$mail=$_POST['mail'];
		$codigo=$_POST['codigo'];
		$cuentas="SELECT * FROM usuarios";
		$resultado=mysqli_query($conexion,$cuentas);
		$informacion=mysqli_fetch_array($resultado);
		if($nombre != "" && $password != "" && $mail != ""){
			if($informacion['nombre'] == $nombre || $informacion['email'] == $mail){
				echo "<script>window.alert('Usuario o mail ya en uso')</script>";
				header("Refresh:1, url='principal.php'");
			} else {
				if($codigo == 'raspaygana'){
					$nuevo ="INSERT INTO usuarios(nombre,password,email,master) VALUES ('$nombre',md5('$password'),'$mail','1')";
				} else {
				$nuevo ="INSERT INTO usuarios(nombre,password,email,master) VALUES ('$nombre',md5('$password'),'$mail','0')";
				}
				mysqli_query($conexion,$nuevo);
				if ($nuevo) {
					echo "<script>window.alert('Cuenta Creada Satisfactoriamente')</script>";
					header("Refresh:0, url='principal.php'");
				}
			
				desconectar($conexion);
			}
		} else {
			echo "No lleno los campos obligatorios";
			header("Refresh:2, url='principal.php'");
		}
?>