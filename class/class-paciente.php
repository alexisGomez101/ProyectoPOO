<?php

	class Paciente extends Persona{

		private $codigoPaciente;
		private $expediente;

		public function __construct($nombre,
					$apellido,
					$fechaNacimiento,
					$edad,
					$id,
					$estado,
					$genero,
					$direccion,
					$telefono,
					$codigoPaciente,
					$expediente){
			parent:: __construct($nombre,
					$apellido,
					$fechaNacimiento,
					$edad,
					$id,
					$estado,
					$genero,
					$direccion,
					$telefono);
			$this->codigoPaciente = $codigoPaciente;
			$this->expediente = $expediente;
		}
		public function getCodigoPaciente(){
			return $this->codigoPaciente;
		}
		public function setCodigoPaciente($codigoPaciente){
			$this->codigoPaciente = $codigoPaciente;
		}
		public function getExpediente(){
			return $this->expediente;
		}
		public function setExpediente($expediente){
			$this->expediente = $expediente;
		}
		public function toString(){
			return parent::toString()." CodigoPaciente: " . $this->codigoPaciente . 
				" Expediente: " . $this->expediente->toString();
		}
	}
?>