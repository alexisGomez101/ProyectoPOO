<?php 

switch ($_GET["accion"]) {
	case '1':
	    include_once("../class/class_conexion.php");
		include_once("../class/class_expediente.php");

		$conexion = new Conexion();
       $registro = new registrar_medicamento(null,
            $_POST["txt-peso"],$_POST["txt-altura"],$_POST["txt-temperatura"],$_POST["txt-sintomas"],$_POST["txt-fecha-cita"],$_POST["txt-hora-cita"]
            );

		$peso = $_POST["txt-peso"];
	    $numeroExpediente = $_POST["txt-noExpediente"];
	    $fecha = $_POST["txt-fecha"];
	    $peso =$_POST["txt-peso"];
	    $edad =$_POST["txt-edad"];
	    $descripcion =$_POST["txt-descripcion"];

	    

	  $registro -> guardarRegistro($conexion);

		break;

	case '2':
			include_once("../class/class_conexion.php");		
		    
            $conexion = new Conexion();
          
            $resultado=$conexion->EjecutarInstruccion(
                'SELECT a.id_expediente, a.sintomas,a.cod_Paciente,b.temperatura,
			 b.peso,c.nombre, c.apellido
			FROM tbl_expediente a
			INNER JOIN tbl_preclinica b
			INNER JOIN tbl_datospaciente c
			On b.id_expediente='.$_POST["txt-codigo"]);

			$fila = $conexion->obtenerFila($resultado)

         ?>
         <table class = "table table-striped table-hover">
         <td>Nombre:</td>
          <td>
          <input type="text" id="txt-nombre" class="form-control" disabled="disabled" value=<?php echo '"'.$fila["nombre"].'"';?> ></td>
   
          <tr>
          <td>Peso:</td>
          <td>
          <input type="text" id="txt-nombre" class="form-control" disabled="disabled" value=<?php echo '"'.$fila["peso"].'"';?> ></td>
          </tr>

          <tr>
          <td>Sintomas:</td>
          <td>
          <input type="text" id="txt-nombre" class="form-control" disabled="disabled" value=<?php echo '"'.$fila["sintomas"].'"';?> ></td>
          </tr>
          
          </table>

   <?php
		break;
	

	case '3':
		$peso = $_POST["txt-peso"];
		$altura = $_POST["txt-altura"];
		$temperatura = $_POST["txt-temperatura"];
		$sintomas = $_POST["slc-sintomas"];
		$fecha = $_POST["txt-fecha-cita"];
		$hora= $_POST["txt-hora-cita"];

		if(strlen($peso)==0||strlen($altura==0||strlen($temperatura)==0){
			if(strlen($sintomas)==0){
				if(strlen($fecha)==0||strlen($hora)==0){
					echo "Y";
				}else{
				echo "N";
			}
			}else {
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