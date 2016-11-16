<?php  
switch ($_GET["accion"]) {
	case '1':

	$nombre = $_POST["txt-nombre"];
	$codigo = $_POST["txt-codigo"];
	$cantidad = $_POST["txt-cantidad"];
	$descripcion = $_POST["txt-descripcion"];
	$fechaElaboracion = $_POST["txt-fechaElaboracion"];
	$fechaVencimiento= $_POST["txt-fechaVencimiento"];


	if (strlen($nombre)==0||strlen($codigo)==0||strlen($cantidad)==0||strlen($descripcion)==0||strlen($fechaVencimiento)==0||strlen($fechaElaboracion)==0) {
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
	
	default:
		echo "error";
		break;
}


	


?>