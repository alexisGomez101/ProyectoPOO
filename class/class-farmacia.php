<?php

	class Farmacia{

		private $codigoProducto;
		private $nombreProducto;
		private $fechaElaboracion;
		private $fechaVencimiento;
		private $cantidad;

		public function __construct($codigoProducto,
					$nombreProducto,
					$fechaElaboracion,
					$fechaVencimiento,
					$cantidad){
			$this->codigoProducto = $codigoProducto;
			$this->nombreProducto = $nombreProducto;
			$this->fechaElaboracion = $fechaElaboracion;
			$this->fechaVencimiento = $fechaVencimiento;
			$this->cantidad = $cantidad;
		}
		public function getCodigoProducto(){
			return $this->codigoProducto;
		}
		public function setCodigoProducto($codigoProducto){
			$this->codigoProducto = $codigoProducto;
		}
		public function getNombreProducto(){
			return $this->nombreProducto;
		}
		public function setNombreProducto($nombreProducto){
			$this->nombreProducto = $nombreProducto;
		}
		public function getFechaElaboracion(){
			return $this->fechaElaboracion;
		}
		public function setFechaElaboracion($fechaElaboracion){
			$this->fechaElaboracion = $fechaElaboracion;
		}
		public function getFechaVencimiento(){
			return $this->fechaVencimiento;
		}
		public function setFechaVencimiento($fechaVencimiento){
			$this->fechaVencimiento = $fechaVencimiento;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}

		
		public function AgregarMedicamentos(){}

		public function EliminarMedicamentos(){}

		public function verMedicamentos(){}

		public function pago(){}

		public function toString(){
			return "CodigoProducto: " . $this->codigoProducto . 
				" NombreProducto: " . $this->nombreProducto . 
				" FechaElaboracion: " . $this->fechaElaboracion . 
				" FechaVencimiento: " . $this->fechaVencimiento . 
				" Cantidad: " . $this->cantidad;
		}
	}
?>