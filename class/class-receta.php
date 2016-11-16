<?php

	class Receta{

		private $codigoReceta;
		private $descripcion;
		private $dosis;

		public function __construct($codigoReceta,
					$descripcion,
					$dosis){
			$this->codigoReceta = $codigoReceta;
			$this->descripcion = $descripcion;
			$this->dosis = $dosis;
		}
		public function getCodigoReceta(){
			return $this->codigoReceta;
		}
		public function setCodigoReceta($codigoReceta){
			$this->codigoReceta = $codigoReceta;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getDosis(){
			return $this->dosis;
		}
		public function setDosis($dosis){
			$this->dosis = $dosis;
		}
		public function toString(){
			return "CodigoReceta: " . $this->codigoReceta . 
				" Descripcion: " . $this->descripcion . 
				" Dosis: " . $this->dosis;
		}
	}
?>