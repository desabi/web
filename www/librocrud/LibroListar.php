<?php
	
	include 'conexion.php';
	
	$conexionMySQL = new Conexion();
	
	$consulta = "SELECT titulo, autor, editorial FROM libro";
	
	$conexionMySQL->obtenerRegistros($consulta, 3);
?>