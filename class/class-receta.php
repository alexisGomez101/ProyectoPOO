<?php

class receta{

		private $nombre;
		private $cantidad;
		private $fecha;
		private $precio;

		public function __construct($nombre,
					$cantidad,
					$fecha,
					$precio
					){
			$this->nombre = $nombre;
			$this->cantidad = $cantidad;
			$this->fecha = $fecha;
			$this->precio = $precio;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
		public function getPrecio(){
			return $this->precio;
		}
		public function setPrecio($precio){
			$this->precio = $precio;
		}
		
		public function toString(){
			return "Nombre: " . $this->nombre . 
				" Cantidad: " . $this->cantidad . 
				" Fecha: " . $this->fecha . 
				" Precio: " . $this->precio;
		}


	public function guardarRegistroReceta($conexion){

            $sql = sprintf(
                "INSERT INTO tbl_medicinas(cod_medicamento, nombre, cantidad, fecha, precio)
                VALUES (null, '%s', '%s', '%s', '%s')",
                        stripslashes($this->nombre),
                        stripslashes($this->cantidad),
                        stripslashes($this->fecha),
                        stripslashes($this->precio),
                        stripslashes(""),
                        stripslashes(4)
                );
        
            //echo $sql;
            $resultado = $conexion->ejecutarInstruccion($sql);
            if ($resultado){
                echo "Se Registro";
            }
            else{
                echo "nada";
            }
        }
	}
?>