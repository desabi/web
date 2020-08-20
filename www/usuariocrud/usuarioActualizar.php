<?php
	
	include 'conexion.php';
	
	$conexionMySQL = new Conexion();
	
	$consultaActualizar = "UPDATE usuario SET nombre='Luisa Maria', edad=32 WHERE idusuario=5";
	
	$conexionMySQL->actualizar($consultaActualizar);
?>