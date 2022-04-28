<?php
	session_start();
	if (isset($_SESSION['usuario'])){
		include("../html/formulario_nueva.html");
	} else {
		echo "Zona Prohibida";
	}
?>