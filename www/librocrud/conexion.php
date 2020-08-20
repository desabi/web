<?php

	/* Clase CRUD:
	   C: Create -> crear -> insertar
	   R: Read   -> leer  -> listar
	   U: Update -> modificar -> actualizar
	   D: Delete -> borrar -> eliminar
	*/

	class Conexion{
		
		/* Metodo para obtener la conexion */
		private function obtenerConexion() {
			
			$conexion = mysqli_connect("localhost", "root", "", "practicasbd");
			
			if (!$conexion) {
				print "<br /> Error al obtener la conexion. <br />";
				print "<b>El error es: " . mysqli_connect_error() . " </b> <br />";
				print "Codigo de error: " . mysqli_connect_errno() . "<br />";
			} else {
				print "Conexion realizada :) <br />";
			}
			
			return $conexion;
		}
		
		/* Meto para insertar un nuevo registro */
		public function insertar($consulta) {
			$conexion = $this->obtenerConexion();
			$insertado = mysqli_query($conexion, $consulta);
			
			if ($insertado === TRUE) {
				print "<b><br />Registro insertado correctamente </b> <br />";
				mysqli_close($conexion);
			} else {
				print "<br />Error al insertar el registro. <br />";
				print "<b>Consulta: </b> " . $consulta . "<br />";
				print "<b>El error es: </b>" . mysqli_error($conexion) . "<br />";
			}
		}
		
		/* Metodo para eliminar un registro */
		public function eliminar($consulta) {
			$conexion = $this->obtenerConexion();
			$insertado = mysqli_query($conexion, $consulta);
			
			if ($insertado === TRUE) {
				print "<b><br />Registro eliminado :) </b> <br />";
				mysqli_close($conexion);
			} else {
				print "<br />Error al eliminar el registro. <br />";
				print "<b>Consulta: </b> " . $consulta . "<br />";
				print "<b>El error es: </b>" . mysqli_error($conexion) . "<br />";
			}
		}
		
		/* Metodo para actualizar un registro */
		public function actualizar($consulta) {
			$conexion = $this->obtenerConexion();
			$insertado = mysqli_query($conexion, $consulta);
			
			if ($insertado === TRUE) {
				print "<b><br />Registro actualizado (y) </b> <br />";
				mysqli_close($conexion);
			} else {
				print "<br />Error al actualizar registro. <br />";
				print "<b>Consulta: </b> " . $consulta . "<br />";
				print "<b>El error es: </b>" . mysqli_error($conexion) . "<br />";
			}
		}
		
		/* metodo para obtener todos los registros */
		public function obtenerRegistros($consulta, $n){
			$conexion = $this->obtenerConexion();
				
			if ($resultados = mysqli_query($conexion, $consulta)) {
				print "<table border='1' width='90%'> ";
				while ( $fila = mysqli_fetch_row($resultados) ) {
					print "<tr>";
					for ($i=0; $i<$n; $i++) {
						print " <td> " . $fila[$i] . " </td> ";
					}
					print "</tr>";
				}
				print "</table>";
				mysqli_free_result($resultados);
				mysqli_close($conexion);
			} else {
				print "<br />Error al listar los registros. <br />";
				print "<b>Consulta: </b> " . $consulta . "<br />";
				print "<b>El error es: </b>" . mysqli_error($conexion) . "<br />";
			}
		}
		
	}
?>