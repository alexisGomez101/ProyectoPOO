<?php 
switch ($_GET["accion"]) {
	case '1':
		$nombre = $_POST["txt-nombre"];
	    $numeroExpediente = $_POST["txt-noExpediente"];
	    $fecha = $_POST["txt-fecha"];
	    $peso =$_POST["txt-peso"];
	    $edad =$_POST["txt-edad"];
	    $descripcion =$_POST["txt-descripcion"];

	    if (strlen($fecha)==0||strlen($nombre)==0||strlen($numeroExpediente)==0){       
	    	if(strlen($edad)==0||strlen($peso)==0||strlen($descripcion)==0) {
	            echo "Y";
	        }else{
	            echo "N";
	        }
	    }else{
	        echo "N";  
	    }


		break;

	case '2':
		echo "bussqueda";
		break;
	

	case '3':
		$codigo = $_POST["txt-codigo"];
		$nombre = $_POST["txt-nombre"];
		$observaciones = $_POST["txt-observaciones"];
		$edad = $_POST["txt-edad"];
		$peso = $_POST["txt-peso"];
		$altura = $_POST["txt-altura"];
		$temperatura = $_POST["txt-temperatura"];
		$presion = $_POST["txt-presion"];
		$sintomas = $_POST["txt-sintomas"];
		$especificaciones = $_POST["txt-especificaciones"];
		$fechaCita = $_POST["txt-fecha-cita"];


		if(strlen($codigo)==0||strlen($nombre)==0||strlen($observaciones)==0){
			if(strlen($edad)==0||strlen($peso)==0||strlen($altura)==0){
				if(strlen($temperatura)==0||strlen($presion)==0||strlen($sintomas)==0){
					if(strlen($especificaciones)==0||strlen($fechaCita)==0){
						echo "Y";
					}else{
						echo "N";
					}
				}else{
					echo "N";
				}
			}else{
				echo "N";
			}
		}else{
				echo "N";
		}
		break;
	
	default:
		echo "Error";
		break;
}

	
 ?>