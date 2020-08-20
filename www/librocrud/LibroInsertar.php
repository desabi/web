<?php
	
	include 'conexion.php';

	$conexionMySQL = new Conexion();
	
	$consulta = "INSERT INTO libro VALUES ('Ingenieria de Software', 'Roger Pressman', 'MCGrawHill', 440, 2011, 650)";
	
	$conexionMySQL->insertar($consulta);
?>