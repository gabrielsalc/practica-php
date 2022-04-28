<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Gabriel Salcedo">
	<link rel="stylesheet" type="text/css" href="../css/sincuenta.css">
	<title>Nueva Cuenta</title>
</head>
<body>
	<section>
		<form action="nuevacuenta.php" method="post">
			<fieldset>
				<label for="nombre">Nombre*:</label>
				<input type="text" id="nombre" name="nombre" placeholder="nombre" class="input"><br>
				<label for="rpassword">Contraseña*:</label>
				<input type="text" name="password" id="password" placeholder="Contraseña" class="input"><br>
				<label for="mail">Dirección de correo*:</label>
				<input type="text" id="mail" name="mail" placeholder="Dirección de Email" class="input"><br>
				<label for="codigo">Codigo Promocional**</label>
				<input type="text" name="codigo" id="codigo" placeholder="Codigo promocional" class="input"><br>
				<input type="submit" value="Crear Cuenta" class="boton">
			</fieldset>
		</form>
	</section>
		* Campos Obligatorios.<br>
		** Codigo Promocional SuperUsuario opcional, si dispones de un codigo, con tu cuenta tendras acceso a subir, eliminar y modificar contenido de la página.<br>
		<a href="principal.php">Volver a  inicio</a>
	
</body>
