<?php

	class Tratamiento{

		private $descripcion;
		private $nebulizar;
		private $inyecciones;

		public function __construct($descripcion,
					$nebulizar,
					$inyecciones){
			$this->descripcion = $descripcion;
			$this->nebulizar = $nebulizar;
			$this->inyecciones = $inyecciones;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getNebulizar(){
			return $this->nebulizar;
		}
		public function setNebulizar($nebulizar){
			$this->nebulizar = $nebulizar;
		}
		public function getInyecciones(){
			return $this->inyecciones;
		}
		public function setInyecciones($inyecciones){
			$this->inyecciones = $inyecciones;
		}
		public function toString(){
			return "Descripcion: " . $this->descripcion . 
				" Nebulizar: " . $this->nebulizar . 
				" Inyecciones: " . $this->inyecciones;
		}
	}
?>