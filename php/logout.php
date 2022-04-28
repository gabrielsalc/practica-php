<?php
	session_start();
	unset($_SESSION['usuario']);
	session_destroy();
	echo "Usted se ha deslogueado, redireccionando...";
	header("Refresh:2, url='principal.php'");
?>