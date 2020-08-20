<?php
	
	class Conexion {
		
		/* Metodo para obtener la conexion */
		private function obtenerConexion() {
			$conexion = new mysqli('localhost', 'root', '', 'practicasbd');
	
			if ($conexion->connect_error) {
				print "<br /><b>Error al conectar: " . $conexion->connect_error . "<b /> <br/>";
			} else {
				print "<b>Conexion realizada con exito<b /> <br /> <br />" ;
			}
			
			return $conexion;		
		}
		
		/* Metodo para insertar un nuevo registro */
		public function insertar($consultaInsertar){
			$conexion = $this->obtenerConexion();
			$insertado = $conexion->query($consultaInsertar);
			
			if($insertado === TRUE){
				print "<b>Registro insertado :) <br />";
				$conexion->close();
			} else {
				print "<b>Error al insertar el registro: <br />" . $conexion->error;
			}
		}
		
		/* Meotod para eliminar un registro */
		public function eliminar($consultaEliminar){
			$conexion = $this->obtenerConexion();
			$eliminado = $conexion->query($consultaEliminar);
			
			if($eliminado === TRUE){
				print "<b>Registro eliminado :) <br />";
				$conexion->close();
			} else {
				print "<b>Error al eliminar el registro: <br />" . $conexion->error;
			}
		}
		
		/* Metodo para actualizar un registro */
		public function actualizar($consultaActualizar){
			$conexion = $this->obtenerConexion();
			$actualizado = $conexion->query($consultaActualizar);
			
			if($actualizado === TRUE){
				print "<b>Registro actualizado :) <br />";
				$conexion->close();
			} else {
				print "<b>Error al actualizar el registro: <br />" . $conexion->error;
			}
		}
		
		/* metodo para listar los registros */
		public function obtenerRegistros($consultaObtenerRegistros, $n){
			$conexion = $this->obtenerConexion();
			
			if ($resultados = $conexion->query($consultaObtenerRegistros)) {
				print "<table border='1' width='90%'> ";
				while ($fila = $resultados->fetch_row()) {
					print "<tr>";
					for ($i=0; $i<$n; $i++) {
						print "<td>" . $fila[$i] . "</td>";	
					}
					print "</tr>";
				}
				print "</table>";
				$resultados->close();
			} else {
				print "<b>Error al obtener los registros: <br />" . $conexion->error;
			}
			
			$conexion->close();
		}
		
	}
	
?>