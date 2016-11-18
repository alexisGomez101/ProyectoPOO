<?php 
  include_once("../class/class_conexion.php");
include_once("../class/class-expediente.php");
include_once("../class/class-receta.php");

switch ($_GET["accion"]) {
	case '1':
	include_once("../class/class_conexion.php");		
		    
            $conexion = new Conexion();
          
           
            $resultado=$conexion->EjecutarInstruccion(
            'SELECT a.id_expediente, a.sintomas,b.peso, b.altura, c.edad, c.fecha_visita
			FROM tbl_expediente a
			INNER JOIN tbl_preclinica b
			INNER JOIN tbl_datospaciente c
			On b.id_expediente='. $_POST["txt-codigo"]);//.$codigo);//.$_POST["txt-busqueda"]);

			$fila = $conexion->obtenerFila($resultado);

         ?>
         <table class = "table table-striped table-hover">
        	 <tr>
	         	<td>Fecha:</td>
	          	<td>
	          		<input type="text" id="txt-fecha" class="form-control" disabled="disabled" value=<?php echo '"'.$fila["fecha_visita"].'"';?> ></td>
	          </tr>
	   
	          <tr>
		          <td>Edad:</td>
		          <td>
	          	<input type="text" id="txt-edad" class="form-control" disabled="disabled" value=<?php echo '"'.$fila["edad"].'"';?> ></td>
	          </tr>

	          <tr>
		          <td>Peso:</td>
		          <td>
		          <input type="text" id="txt-peso" class="form-control" disabled="disabled" value=<?php echo '"'.$fila["peso"].'"';?> ></td>
	          </tr>
	           <tr>
		          <td>Sintomas:</td>
		          <td>
		          <input type="text" id="txt-sintomas" class="form-control" disabled="disabled" value=<?php echo '"'.$fila["sintomas"].'"';?> ></td>
	          </tr>
	           <tr>
		          <td>Altura:</td>
		          <td>
		          <input type="text" id="txt-altura" class="form-control" disabled="disabled" value=<?php echo '"'.$fila["altura"].'"';?> ></td>
	          </tr>
          
          </table>

   <?php
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

			$fila = $conexion->obtenerFila($resultado);

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
		$sintomas = $_POST["txt-sintomas"];
		$fecha = $_POST["txt-fecha-cita"];
		$hora= $_POST["txt-hora-cita"];

		if(strlen($peso)==0||strlen($altura)==0||strlen($temperatura)==0||strlen($sintomas)==0||strlen($fecha)==0||strlen($hora)==0){
				echo "Y";
		}else{
			echo "N";
		}

	break;

		case '4':
		$conexion = new Conexion();
		$registro = new expediente(null,$_POST["txt-peso"],$_POST["txt-altura"],$_POST["txt-temperatura"],$_POST["txt-sintomas"],$_POST["txt-hora-cita"], $_POST["txt-fecha-cita"]
            );

        $registro -> guardarRegistro($conexion);
	break;

	case '5':

		$nombre = $_POST["txt-nombre"];
		$cantidad = $_POST["txt-cantidad"];
		$fecha = $_POST["txt-fecha"];
		$precio = $_POST["txt-precio"];

		if(strlen($nombre)==0||strlen($cantidad)==0||strlen($fecha)==0||strlen($precio)==0){
				echo "Y";
		}else{
			echo "N";
		}

		break;	

	case '6':
		$conexion = new Conexion();
		$registro = new receta(null,
			$_POST["txt-nombre"],
			$_POST["txt-cantidad"],
			$_POST["txt-fecha"],
			$_POST["txt-precio"]
			);

        $registro -> guardarRegistroReceta($conexion);
	break;
	
	default:

		echo "Error";
		break;
}

	
 ?>