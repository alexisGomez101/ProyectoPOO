<?php 
include_once("../class/class_conexion.php");
$conexion= new Conexion();
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

		$resultado=$conexion->EjecutarInstruccion(
			"SELECT a.id_expediente, a.sintomas,a.cod_Paciente,b.temperatura,
			 b.peso,c.nombre, c.apellido
			FROM tbl_expediente a
			INNER JOIN tbl_preclinica b
			INNER JOIN tbl_datospaciente c
			On b.id_expediente=2");

		while($fila= $conexion->obtenerFila($resultado)){
			?>
				<tr>
					<td>
						<?php echo $fila["nombre"]; ?>
					</td>
				</tr>
			<?php
		}


		break;
	

	case '3':
		$codigo = $_POST["txt-codigo"];
		$sintomas = $_POST["txt-sintomas"];
		$especificaciones = $_POST["txt-especificaciones"];
		$tratamiento = $_POST["slc-tratamiento"];


		if(strlen($codigo)==0||strlen($sintomas)==0){
			if(strlen($especificaciones)==0||strlen($tratamiento)==0){
					echo "Y";
				}else{
				echo "N";
			}
			}else {
				echo "N";
			}


		break;
		
	
	default:
		echo "Error";
		break;
}

	
 ?>