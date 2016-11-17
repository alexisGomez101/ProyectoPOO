<?php

	class eliminar_medicamento{

		private $codigoM;

		public function __construct(){
			
	
		}
		public function getCodigoM(){
			return $this->codigoM;
		}
		public function setCodigoM($codigoM){
			$this->codigoM = $codigoM;
		}

		public function toString(){
			return "CodigoM: " . $this->codigoM;

		}

		public function eliminarRegistro($conexion,$codigoAplicacion){

            $sql = sprintf(
                "DELETE FROM tbl_medicinas 
					WHERE cod_medicamento = '%s'
                	",  

                    stripslashes($codigoAplicacion)
                );
            echo $sql;
            $resultado = $conexion->ejecutarInstruccion($sql);
            if ($resultado)
                echo "se elimino";
            else
                echo "nada";
        }


	}
?>