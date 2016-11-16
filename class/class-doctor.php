<?php

	class Doctor extends  Empleado{

		private $codigoDoctor;
		private $especialidad;
	
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
					$codigoDoctor,
					$especialidad){
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
			$this->codigoDoctor = $codigoDoctor;
			$this->especialidad = $especialidad;
			
		}
		public function getCodigoDoctor(){
			return $this->codigoDoctor;
		}
		public function setCodigoDoctor($codigoDoctor){
			$this->codigoDoctor = $codigoDoctor;
		}
		public function getEspecialidad(){
			return $this->especialidad;
		}
		public function setEspecialidad($especialidad){
			$this->especialidad = $especialidad;
		}
		
		public function toString(){
			return parent::toString()."CodigoDoctor: " . $this->codigoDoctor . 
				" Especialidad: " . $this->especialidad; 
				
		}
	}
?>