<?php
session_start();
	if (isset($_SESSION['usuario'])){
		include('../html/formulario_configurar.html');
	} else {
		echo "Zona Prohibida";
	}
?>