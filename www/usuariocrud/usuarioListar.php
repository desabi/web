<?php
	include 'conexion.php';
	
	$conexionMySQL = new Conexion();
	
	$consultaObtenerRegistros = "SELECT idusuario, nombre, edad FROM usuario";
	
	$conexionMySQL->obtenerRegistros($consultaObtenerRegistros, 3);
?>