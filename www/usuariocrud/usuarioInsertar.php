<?php
	include 'conexion.php';
	
	$conexionMySQL = new Conexion();
	
	$consultaInsertar = "INSERT INTO usuario VALUES (null, 'Gerardo', 'Suarez Lopez', 28, 7571002869)";

	
	$conexionMySQL->insertar($consultaInsertar);
?>