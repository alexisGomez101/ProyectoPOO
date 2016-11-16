<?php

	abstract class Persona{

		private $nombre;
		private $apellido;
		private $fechaNacimiento;
		private $edad;
		private $id;
		private $estado;
		private $genero;
		private $direccion;
		private $telefono;

		public function __construct($nombre,
					$apellido,
					$fechaNacimiento,
					$edad,
					$id,
					$estado,
					$genero,
					$direccion,
					$telefono){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->fechaNacimiento=$fechaNacimiento;
			$this->edad = $edad;
			$this->id = $id;
			$this->estado = $estado;
			$this->genero = $genero;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getfechaNacimiento(){
			return $this->fechaNacimiento;
		}
		public function setfechaNacimiento($fechaNacimiento){
			$this->fechaNacimiento =$fechaNacimiento;
		}
		public function getEdad(){
			return $this->edad;
		}
		public function setEdad($edad){
			$this->edad = $edad;
		}
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function toString(){
			return "Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido .
				" Fecha Nacimiento: ".$this->fechaNacimiento. 
				" Edad: " . $this->edad . 
				" Id: " . $this->id . 
				" Estado: " . $this->estado . 
				" Genero: " . $this->genero . 
				" Direccion: " . $this->direccion . 
				" Telefono: " . $this->telefono;
		}
	}
?>