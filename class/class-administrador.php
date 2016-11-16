<?php
 include_once("class-empleado.php");
	class Administrador extends Empleado {

		private $codigoAdministrador;
		private $Usuario;
		private $contraseña;

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
					$codigoAdministrador,
					$Usuario,
					$contraseña){
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
			$this->codigoAdministrador = $codigoAdministrador;
			$this->Usuario = $Usuario;
			$this->contraseña = $contraseña;
		}
		public function getCodigoAdministrador(){
			return $this->codigoAdministrador;
		}
		public function setCodigoAdministrador($codigoAdministrador){
			$this->codigoAdministrador = $codigoAdministrador;
		}
		public function getUsuario(){
			return $this->Usuario;
		}
		public function setUsuario($Usuario){
			$this->Usuario = $Usuario;
		}
		public function getContraseña(){
			return $this->contraseña;
		}
		public function setContraseña($contraseña){
			$this->contraseña = $contraseña;
		}

		
		public function verPaciente(){}

		public function verEnfermero(){}

		public function verDoctor(){}

		public function verFarmacia(){}

		public function crearUsuarios(){}

		public function toString(){
			return parent::toString(). "CodigoAdministrador: " . $this->codigoAdministrador . 
				" Usuario: " . $this->Usuario . 
				" Contraseña: " . $this->contraseña;
		}
	}
?>