<?php
	
	include 'conexion.php';
	
	$conexionMySQL = new Conexion();
	
	$consulta = "UPDATE libro SET titulo='INGENIERIA de SOFT' WHERE autor='Roger Pressman'";
	
	$conexionMySQL->actualizar($consulta);
?>