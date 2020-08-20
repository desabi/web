<?php

	include 'conexion.php';
	
	$conexionMySQL = new Conexion();
	
	$consulta = "DELETE FROM libro WHERE autor='Roger Pressman'";
	
	$conexionMySQL->eliminar($consulta);
	
?>