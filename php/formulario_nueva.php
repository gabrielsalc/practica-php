<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Gabriel Salcedo">
	<title>Nueva Cancion</title>
</head>
<body>
	<h2>Nueva Cancion/h2>
	<form action="nueva.php" enctype="multipart/form-data" method="post">>
		<label for="nombre">Nombre: </label>
		<input type="text" id="nombre" name="nombre" placeholder="Nombre de Canción"><br>
		<label for="artista">Artista: </label>
		<input type="text" name="artista" id="artista" placeholder="Artista"><br>
		<label for="genero">Genero: </label>
		<input type="text" id="genero" name="genero" placeholder="Género"><br>
		<label for="fecha">Año: </label>
		<input type="text" name="fecha" placeholder="Año de Publicaión" id="fecha"><br>
		<label for="pista">Pista: </label>
		<input id="pista" name="pista" type="file" >
		<input type="submit" value="Guardar" class="boton">
	</form>