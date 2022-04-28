<?php
	include_once('funciones.php'); //incluyo la funcion conexion//
	session_start(); 					//inicio de sesiones//
	if (isset($_SESSION['usuario'])){   //si existe la sesion con el nombre de usuario entonces la pagina funciona//
		$valor = $_COOKIE['nombre'];
		if(isset($valor)){
			if ($valor == 2){
				include_once('../html/encabezado2.html');
			} else {
				include_once('../html/encabezado1.html');
			}
		} else {
			include_once('../html/encabezado1.html');
		}
		include_once('../html/principal.html');   //incluyo el html necesario//
		$conexion=conectar();   //me conecto a la base de datos//
		$query1="SELECT * FROM usuarios";   //creo un string//
		$resultado1=mysqli_query($conexion,$query1); // ahora hago la consulta en la base de datos ya conectada, con el string query//
		$data1=mysqli_fetch_array($resultado1);  //me da un array con los valores de la base de datos//
		$query="SELECT * FROM canciones";  
		$resultado=mysqli_query($conexion,$query);
		while($data=mysqli_fetch_array($resultado)){  //mientras haya informacion, me escribira los resultados//
			$id = $data['id'];	//declaro variable id por cada cancion, esta se escribe por lo que no importa que vaya cambiando//
			echo "<section><br><ul type='none'>
				<li class='list'>".$data['nombre']."</li>
				<li class='list'>".$data['artista']."</li>
				<li class='list'>".$data['genero']."</li>
				<li class='list'>".$data['fecha']."</li>";   //escribo datos de cada cancion en la pagina//
			$ruta='../audio/'.$data['pista'];			//aqui esta el archivo de audio, la direccion se genera dentro de una variable//
			if ($data['portada'] != ""){				//si no se encuentra portada, uso un icono generico de spotify en su lugar//
				$ruta2='../img/'.$data['portada'];
			} else {
				$ruta2='../img/spotify-icon.png';
			}
			echo "<li><img src='$ruta2' alt='portada de disco' tag='portada de disco' class='portada'></li><li><audio controls class='audio'><source src='$ruta' type='audio/mpeg'></audio></li>";
			$nombre = $_SESSION['usuario'];
			$query2 = "SELECT * FROM usuarios WHERE nombre = '$nombre'"; //vuelvo a consultar, para que dependiendo del usuario, pueda o no 																modificar, para eso se puso el codigo promocional SuperUsuario//
			$resultado2 = mysqli_query($conexion,$query2);
			$data2 = mysqli_fetch_array($resultado2);
			$master = $data2['master'];
			if($master == 1){
				echo "<li><a href='formulario_modificar.php?id=$id'>Modificar<img src='../img/edit_pencil.png' class='modificar' alt='lapiz modificador' tag='lapiz modificador'></a></li><li><a href='formulario_borrar.php?id=$id'>Borrar<img src='../img/trash_empty.png' class='borrar' alt='basurero borrador' tag='basurero borrador'></a><li></section>";
			}
			echo "</section>";
		}
		mysqli_free_result($resultado);

		desconectar($conexion);
		if($master == 1){
			echo "<section><a class='nuevacancion' href='nuevacancion.php'>Nueva Canción<img src='../img/new_serie.png' class='cancion' alt='nueva cancion' tag='nueva cancion'></a></section>";
		}
	} else {
		echo "no puedes ver esto"; //si no ha sesion, la pagina solo arroja este texto//
	}