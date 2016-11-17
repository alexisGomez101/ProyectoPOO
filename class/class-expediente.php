<?php

	class Expediente{

		private $edad;
		private $peso;
		private $altura;
		private $temperatura;
		private $presion;
		private $sintomas;
		private $tratamiento;
		private $fecha;
		private $hora;
		private $doctor;

		public function __construct($edad,
					$peso,
					$altura,
					$temperatura,
					$presion,
					$sintomas,
					$tratamiento,
					$fecha,
					$hora,
					$doctor
					$){
			$this->edad = $edad;
			$this->peso = $peso;
			$this->altura = $altura;
			$this->sintomas = $sintomas;
			$this->tratamiento = $tratamiento;
			$this->tratamiento = $tratamiento;
			$this->fecha = $fecha;
			$this->hora = $hora;
			$this->doctor = $doctor;
		}
		public function getPeso(){
			return $this->peso;
		}
		public function set($codigoExpediente){
			$this->peso = $peso;
		}
		public function getAltura(){
			return $this->altura;
		}
		public function setAltura($altura){
			$this->altura = $altura;
		}
		public function getTemperatura(){
			return $this->temperatura;
		}
		public function setTemperatura($temperatura){
			$this->temperatura = $temperatura;
		}
		public function getSintomas(){
			return $this->sintomas;
		}
		public function setSintomas($sintomas){
			$this->sintomas = $sintomas;
		}
	
		public function getHora(){
			return $this->hora;
		}
		public function setHora($hora){
			$this->hora = $hora;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
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

		public function guardarRegistro($conexion){

            $sql = sprintf(
                "INSERT INTO tbl_preclinica(cod_Preclinica,peso, altura, temperatura)
                VALUES (NULL, '%s', '%s')",  
                        stripslashes($this->edad),
                        stripslashes($this->peso),
                        stripslashes($this->altura),
                        stripslashes($this->temperatura),
                ).sprintf(
                "INSERT INTO tbl_citas(id_citas, fecha, hora)
                VALUES (NULL, '%s', '%s')",  
                        stripslashes($this->fecha),
                        stripslashes($this->hora),
                ).sprintf(
                "INSERT INTO tbl_expedientes(id_expediente, sintomas)
                VALUES (NULL, '%s')",  
                        stripslashes($this->sintomas),
                );
            //echo $sql;
            $resultado = $conexion->ejecutarInstruccion($sql);
            if ($resultado)
                echo "Se Registro";
            else
                echo "nada";
        }
	}
?>