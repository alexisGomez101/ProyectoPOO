<?php
include_once("class-persona.php");

	abstract class Empleado extends Persona{

		protected $fechaIngreso;
		protected $area;
		protected $turnoTrabajo;
		protected $sueldos;

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
					$sueldos){
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
			$this->fechaIngreso = $fechaIngreso;
			$this->area = $area;
			$this->turnoTrabajo = $turnoTrabajo;
			$this->sueldos = $sueldos;
		}
		public function getFechaIngreso(){
			return $this->fechaIngreso;
		}
		public function setFechaIngreso($fechaIngreso){
			$this->fechaIngreso = $fechaIngreso;
		}
		public function getArea(){
			return $this->area;
		}
		public function setArea($area){
			$this->area = $area;
		}
		public function getTurnoTrabajo(){
			return $this->turnoTrabajo;
		}
		public function setTurnoTrabajo($turnoTrabajo){
			$this->turnoTrabajo = $turnoTrabajo;
		}
		public function getSueldos(){
			return $this->sueldos;
		}
		public function setSueldos($sueldos){
			$this->sueldos = $sueldos;
		}
		public function toString(){
			return parent::toString()."FechaIngreso: " . $this->fechaIngreso . 
				" Area: " . $this->area . 
				" TurnoTrabajo: " . $this->turnoTrabajo . 
				" Sueldos: " . $this->sueldos;
		}
	}
?>