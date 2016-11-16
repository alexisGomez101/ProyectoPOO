<?php 

switch ($_GET["accion"]) {
	case '1':
		$nombre =   $_POST["txt-nombre"];
		$apellidos =  $_POST["txt-apellidos"];
		$fechaNacimiento = $_POST["txt-fechaNacimiento"];
		$Edad =   $_POST["txtEdad"];
		$id =  $_POST["txt-id"];
		$direccion =  $_POST["txt-direccion"];
		$telefono = $_POST["txt-telefono"];
		//$estado=["slc-estado"];
		//$genero=["slc-genero"];
		$fechaIngreso =  $_POST["txt-fechaIngreso"];
		$codigo =   $_POST["txt-codigo"];
		$contraseña =   $_POST["txt-contraseña"];
		$area = $_POST["txt-area"];
		$turnoTrabajo =  $_POST["txt-turnoTrabajo"];
		$sueldo = $_POST["txt-sueldo"];



		if (strlen($nombre)==0||strlen($apellidos)==0||strlen($fechaNacimiento)==0){
			if(strlen($Edad)==0||strlen($id)==0||strlen($direccion)==0){
				if(strlen($telefono)==0||strlen($fechaIngreso)==0||strlen($codigo)==0){
					if(strlen($contraseña)==0||strlen($area)==0||strlen($turnoTrabajo)==0||strlen($sueldo)==0){
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

	case '2':
			//Instruccion mysql para eliminar
		 echo "eliminar";

		break;

	case '3':
			//Instruccion mysql para consultar doctores
		 echo "doctores";
		 ?>
		  <tr>
                                <td>1</td> <td>doctor</td> <td>0000-0000-00000</td> <td>col.brisas</td> <td>22-22-22-22</td>  <td>soltero</td> <td>12/12/12</td> <td>general</td> <td>vesperdina</td> <td>12000</td>
                            </tr>
                            <tr>
                                <td>2</td> <td>doctor1</td>  <td>0000-0000-00000</td> <td>col.brisas</td> <td>22-22-22-22</td>  <td>soltero</td> <td>12/12/12</td> <td>general</td> <td>vesperdina</td> <td>12000</td>
                            </tr>
                            <tr>
                                <td>3</td> <td>doctor2</td>  <td>0000-0000-00000</td> <td>col.brisas</td> <td>22-22-22-22</td>  <td>soltero</td> <td>12/12/12</td> <td>general</td> <td>vesperdina</td> <td>12000</td>
                            </tr>
         <?php

		break;

	case '4':
		//Instruccion mysql para consultar enfermeros
		echo "enfermeros";
	break;


	case '5':
		//Instruccion mysql para consultar enfermeros
		echo "Expedientes";
		break;

	case '6':
		//Instruccion mysql para consultar enfermeros
		echo "tratamiento";
	break;

	case '7':
		//Instruccion mysql para consultar enfermeros
		echo "citas";
	break;

	case '8':
		//Instruccion mysql para consultar enfermeros
		echo "sucursales";
	break;
	case '9':
		//Instruccion mysql para consultar enfermeros
		echo "Medicamentos";
	break;
	
	case '10':
		//Instruccion mysql para consultar enfermeros
		echo "busqueda";
	break;
	
	default:
		# code...
		break;
}


?>