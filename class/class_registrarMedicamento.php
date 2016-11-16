<?php

	class registrar_medicamento{

		private $codigoM;
		private $nombreM;
		private $fecha_elaboracion;
		private $fecha_caducidad;
		private $cantidad;
		private $Descripcion;

		public function __construct($codigoM,
					$nombreM,
					$fecha_elaboracion,
					$fecha_caducidad,
					$cantidad,
					$Descripcion){
			$this->codigoM = $codigoM;
			$this->nombreM = $nombreM;
			$this->fecha_elaboracion = $fecha_elaboracion;
			$this->fecha_caducidad = $fecha_caducidad;
			$this->cantidad = $cantidad;
			$this->Descripcion = $Descripcion;
		}
		public function getCodigoM(){
			return $this->codigoM;
		}
		public function setCodigoM($codigoM){
			$this->codigoM = $codigoM;
		}
		public function getNombreM(){
			return $this->nombreM;
		}
		public function setNombreM($nombreM){
			$this->nombreM = $nombreM;
		}
		public function getFecha_elaboracion(){
			return $this->fecha_elaboracion;
		}
		public function setFecha_elaboracion($fecha_elaboracion){
			$this->fecha_elaboracion = $fecha_elaboracion;
		}
		public function getFecha_caducidad(){
			return $this->fecha_caducidad;
		}
		public function setFecha_caducidad($fecha_caducidad){
			$this->fecha_caducidad = $fecha_caducidad;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}

		public function getDescripcion(){
			return $this->Descripcion;
		}
		public function setDescripcion($Descripcion){
			$this->Descripcion = $Descripcion;
		}
		public function toString(){
			return "CodigoM: " . $this->codigoM . 
				" NombreM: " . $this->nombreM . 
				" Fecha_elaboracion: " . $this->fecha_elaboracion . 
				" Fecha_caducidad: " . $this->fecha_caducidad . 
				" Cantidad: " . $this->cantidad .  
				" Descripcion: " . $this->Descripcion;
		}


		public function guardarRegistro($conexion){

            $sql = sprintf(
                "INSERT INTO tbl_medicinas(cod_medicamento, Cantidad, nombre, precio, fecha_Elaboracion, fecha_Vencimiento, cod_Sucursal)
                VALUES (NULL, '%s', '%s', '%s', '%s', 
                            '%s','%s')",  
                        stripslashes($this->cantidad),
                        stripslashes($this->nombreM),
                        stripslashes($this->cantidad),
                        stripslashes($this->fecha_elaboracion),
                        stripslashes($this->fecha_caducidad),
                        stripslashes(4)

                );
            echo $sql;
            $resultado = $conexion->ejecutarInstruccion($sql);
            if ($resultado)
                echo "se inserto";
            else
                echo "nada";
        }
	}
?>