<?php

	class actualizar_medicamento{

		private $codigoM;
		private $nombreM;
		private $fecha_elaboracion;
		private $fecha_caducidad;
		private $cantidad;
		private $Sucursal;
		private $precio;

		public function __construct($codigoM,
					$nombreM,
					$fecha_elaboracion,
					$fecha_caducidad,
					$cantidad,
					$Sucursal,
					$precio){
			$this->codigoM = $codigoM;
			$this->nombreM = $nombreM;
			$this->fecha_elaboracion = $fecha_elaboracion;
			$this->fecha_caducidad = $fecha_caducidad;
			$this->cantidad = $cantidad;
			$this->Sucursal = $Sucursal;
			$this->precio = $precio;
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
		public function getSucursal(){
			return $this->Sucursal;
		}
		public function setSucursal($Sucursal){
			$this->Sucursal = $Sucursal;
		}
		public function getPrecio(){
			return $this->precio;
		}
		public function setPrecio($precio){
			$this->precio = $precio;
		}
		public function toString(){
			return "CodigoM: " . $this->codigoM . 
				" NombreM: " . $this->nombreM . 
				" Fecha_elaboracion: " . $this->fecha_elaboracion . 
				" Fecha_caducidad: " . $this->fecha_caducidad . 
				" Cantidad: " . $this->cantidad . 
				" Sucursal: " . $this->Sucursal . 
				" Precio: " . $this->precio;
		}

		public function actualizarRegistro($conexion,$codigoAplicacion){

            $sql = sprintf(
                "UPDATE tbl_medicinas 
                SET  Cantidad='%s', nombre='%s', precio='%s', fecha_Elaboracion='%s', fecha_Vencimiento='%s', cod_Sucursal='%s'
                WHERE cod_medicamento='%s'
                	",  
                        stripslashes($this->cantidad),
                        stripslashes($this->nombreM),
                        stripslashes($this->precio),
                        stripslashes($this->fecha_elaboracion),
                        stripslashes($this->fecha_caducidad),
                        stripslashes($this ->Sucursal->getCod_sucursal()),
                        stripslashes($codigoAplicacion)
                );
            //echo $sql;
            $resultado = $conexion->ejecutarInstruccion($sql);
            if ($resultado)
                echo "se actualizo";
            else
                echo "nada";
        }


	}
?>