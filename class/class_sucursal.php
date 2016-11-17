<?php

	class Sucursal{

		private $cod_sucursal;


		public function __construct($cod_sucursal){
			$this->cod_sucursal = $cod_sucursal;

		}
		public function getCod_sucursal(){
			return $this->cod_sucursal;
		}
		public function setCod_sucursal($cod_sucursal){
			$this->cod_sucursal = $cod_sucursal;
		}
		
		public function toString(){
			return "Cod_sucursal: " . $this->cod_sucursal;
		}

		public static function generarListaSucursal($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				"SELECT cod_Sucursal, Nombre
				FROM tbl_sucursales"
			);
			echo '<select name="txt-sucursal" id="txt-sucursal" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["cod_Sucursal"].'">'.
					$fila["Nombre"].' </option>';
			}
			echo '</select>';

		}


	}
?>