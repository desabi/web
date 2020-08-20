<?php
	
	include 'conexion.php';
	
	$conexionMySQL = new Conexion();
	
	$consultaEliminar = "DELETE FROM usuario WHERE idusuario=7";
	
	$conexionMySQL->eliminar($consultaEliminar);
	
?>