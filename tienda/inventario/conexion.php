<?php

	$mysqli = new MySQLi("localhost","tiendav","Tienda123#","tienda");

	if (!$mysqli) die ("Error al conectar con el servidor -> ".mysqli_error());

	mysqli_query ($mysqli,"SET NAMES 'utf8'");
?>