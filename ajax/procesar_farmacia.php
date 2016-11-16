<?php  
switch ($_GET["accion"]) {
	case '1':

	$nombre = $_POST["txt-nombre"];
	$cantidad = $_POST["txt-cantidad"];
	$descripcion = $_POST["txt-descripcion"];
	$fechaElaboracion = $_POST["txt-fechaElaboracion"];
	$fechaVencimiento= $_POST["txt-fechaVencimiento"];


	if (strlen($nombre)==0||strlen($cantidad)==0||strlen($descripcion)==0||strlen($fechaVencimiento)==0||strlen($fechaElaboracion)==0) {
		echo "Y";
		}
	else{
		echo "N";
		}
		
		break;

	case '2':
		echo "eliminar ";
		break;

	case '3':
		echo "Pago ";
		break;

	case '4':
		echo "ir a recetas ";
		break;
	
	case '5':
		echo "sucersales ";
		break;

	case '6':
		echo "Medicamentos ";
		break;
	
	case '7':
		echo "busqueda ";
		break;

	case '8':
        include_once("../class/class_conexion.php");
        include_once("../class/class_registrarMedicamento.php");

       $conexion = new Conexion();
        $registro = new registrar_medicamento(null,
            $_POST["txt-nombre"],$_POST["txt-fechaElaboracion"],$_POST["txt-fechaVencimiento"],$_POST["txt-cantidad"],
            $_POST["txt-descripcion"]
            );

        $registro -> guardarRegistro($conexion);




        break;



	default:
		echo "error";
		break;
}




?>