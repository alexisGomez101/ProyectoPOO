<?php

	class Enfermeros extends  Empleado {

		private $CodigoEnfermero;
		private $Paciente;

		public function __construct($nombre,
					$apellido,
					$fechaNacimiento,
					$edad,
					$id,
					$estado,
					$genero,
					$direccion,
					$telefono,
					$fechaIngreso,
					$area,
					$turnoTrabajo,
					$sueldos,
					$CodigoEnfermero,
					$Paciente){
			parent::__construct($nombre,
					$apellido,
					$fechaNacimiento,
					$edad,
					$id,
					$estado,
					$genero,
					$direccion,
					$telefono,
					$fechaIngreso,
					$area,
					$turnoTrabajo,
					$sueldos);
			$this->CodigoEnfermero = $CodigoEnfermero;
			$this->Paciente = $Paciente;
		}
		public function getCodigoEnfermero(){
			return $this->CodigoEnfermero;
		}
		public function setCodigoEnfermero($CodigoEnfermero){
			$this->CodigoEnfermero = $CodigoEnfermero;
		}
		public function getPaciente(){
			return $this->Paciente;
		}
		public function setPaciente($Paciente){
			$this->Paciente = $Paciente;
		}

		public function CrearExpediente(){}


		public function toString(){
			return parent:: toString()." CodigoEnfermero: " . $this->CodigoEnfermero . 
				" Paciente: " . $this->Paciente->toString();
		}
	}
?>