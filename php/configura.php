<?php
		$value = $_POST['vista'];
		setcookie('nombre', $_POST['vista'], time() +365*24*60*60);
		header("Refresh:2, url='inicio.php'");
?>