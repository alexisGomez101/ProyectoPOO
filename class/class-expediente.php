<?php

	class Expediente{

		private $codigoExpediente;
		private $peso;
		private $presion;
		private $sintomas;
		private $tratamiento;
		private $receta;
		private $citas;
		private $doctor;

		public function __construct($codigoExpediente,
					$peso,
					$presion,
					$sintomas,
					$tratamiento,
					$receta,
					$citas,
					$doctor){
			$this->codigoExpediente = $codigoExpediente;
			$this->peso = $peso;
			$this->presion = $presion;
			$this->sintomas = $sintomas;
			$this->tratamiento = $tratamiento;
			$this->receta = $receta;
			$this->citas = $citas;
			$this->doctor = $doctor;
		}
		public function getCodigoExpediente(){
			return $this->codigoExpediente;
		}
		public function setCodigoExpediente($codigoExpediente){
			$this->codigoExpediente = $codigoExpediente;
		}
		public function getPeso(){
			return $this->peso;
		}
		public function setPeso($peso){
			$this->peso = $peso;
		}
		public function getPresion(){
			return $this->presion;
		}
		public function setPresion($presion){
			$this->presion = $presion;
		}
		public function getSintomas(){
			return $this->sintomas;
		}
		public function setSintomas($sintomas){
			$this->sintomas = $sintomas;
		}
		public function getTratamiento(){
			return $this->tratamiento;
		}
		public function setTratamiento($tratamiento){
			$this->tratamiento = $tratamiento;
		}
		public function getReceta(){
			return $this->receta;
		}
		public function setReceta($receta){
			$this->receta = $receta;
		}
		public function getCitas(){
			return $this->citas;
		}
		public function setCitas($citas){
			$this->citas = $citas;
		}
		public function getDoctor(){
			return $this->doctor;
		}
		public function setDoctor($doctor){
			$this->doctor = $doctor;
		}

		public function ActualizarExpediente(){}
		
		public function toString(){
			return "CodigoExpediente: " . $this->codigoExpediente . 
				" Peso: " . $this->peso . 
				" Presion: " . $this->presion . 
				" Sintomas: " . $this->sintomas . 
				" Tratamiento: " . $this->tratamiento ->toString(). 
				" Receta: " . $this->receta->toString() . 
				" Citas: " . $this->citas . 
				" Doctor: " . $this->doctor->toString();
		}
	}
?>