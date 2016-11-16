<?php
include_once("../class/class_conexion.php");
$Conexion = new Conexion();


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

        $resultado= $Conexion->ejecutarInstruccion(
            'SELECT  id_persona   ,cod_tipo_usuario ,  nombre ,  apellido, edad ,  identidad ,  genero ,  direccion ,telefono ,estado, Area ,horario, hora_Entrada , hora_Salida ,fecha_Ingreso 
                FROM  tbl_persona 
                WHERE  cod_tipo_usuario = 3');

         ?>
          <table class = "table table-striped table-hover">
                    <h1 >Doctores</h1>
                            <tr>

                                <th>Codigo </th>
                                
                                <th>Nombre</th>
                                <th></th>
                                <th>Identidad</th>
                                <th></th> 
                                <th>Direccion</th>
                                <th></th>
                                <th>Telefono</th>
                                <th></th>
                                
                                
                                <th>Fecha_Ingreso</th>
                                <th></th>
                                <th>Area</th>
                                <th></th>
                                <th>Horario_Trabajo</th>
                                <th></th>
                                
                            </tr> 

    <?php 
                   while($fila = $Conexion->obtenerFila($resultado)){
        
    
     ?> 
       <table class = "table table-striped table-hover">
                            <tr>
                                <td><?php echo $fila["id_persona"];?></td>
                                <td></td>
                                <td><?php echo $fila["nombre"]; ?></td> 
                                <td><?php echo $fila["identidad"]; ?></td> 
                                <td><?php echo $fila["direccion"]; ?></td> 
                                <td><?php echo $fila["telefono"]; ?></td>  
                                
                                <td><?php echo $fila["fecha_Ingreso"]; ?></td>
                                <td><?php echo $fila["Area"]; ?></td> 
                                <td><?php echo $fila["horario"]; ?></td> 
                               
                            </tr>          
                </table>
          
         <?php
            }
		

		break;

	case '4':
		//Instruccion mysql para consultar enfermeros
	
        $resultado= $Conexion->ejecutarInstruccion(
            "SELECT  id_persona ,  nombre ,  apellido,  identidad ,  direccion ,  telefono  , estado ,  Area , horario ,  fecha_Ingreso ,sueldo
                FROM  tbl_persona 
                WHERE cod_tipo_usuario = 2");

       
    
        ?>
        <table class = "table table-striped table-hover">
                    <h1 >Enfermeros</h1>
                            <tr>
                                <th>Codigo </th>
                                <th>Nombre</th>
                                <th>Identidad</th> 
                                <th>Direccion</th>
                                <th>Telefono</th>
                                
                                <th>Estado</th>
                                <th>Fecha_Ingreso</th>
                                <th>Area</th>
                                <th>Horario_Trabajo</th>
                                <th>Sueldo</th>
                                <?php 
                   while($fila = $Conexion->obtenerFila($resultado)){
        
    ?>
                            <tr>
                                <td><?php echo $fila["id_persona"];?></td>
                                <td><?php echo $fila["nombre"]." ".$fila["apellido"]; ?></td> 
                                <td><?php echo $fila["identidad"]; ?></td> 
                                <td><?php echo $fila["direccion"]; ?></td> 
                                <td><?php echo $fila["telefono"]; ?></td>  
                                <td><?php echo $fila["estado"]; ?></td> 
                                <td><?php echo $fila["fecha_Ingreso"]; ?></td>
                                <td><?php echo $fila["Area"]; ?></td> 
                                <td><?php echo $fila["horario"]; ?></td> 
                                <td><?php echo $fila["sueldo"]; ?></td>
                            </tr>  
                </table>

        <?php
    }
	break;


	case '5':
		//Instruccion mysql para consultar enfermeros
		echo "Expedientes";

		?>
			<table class = "table table-striped table-hover">
                    <h1 >Expediente</h1>
                            <tr>
                                <th>Codigo_Paciente </th>
                                <th>Codigo_Doctor</th>
                                <th>Nombre</th>
                                <th>Peso</th> 
                                <th>Presion</th>
                                <th>Sintomas</th>
                                <th>Citas</th>
                                <th>Tratamiento</th>
                                <th>Recetas</th>

                                
                            </tr>                   
                            <tr>
                                <td>1</td> <td>001</td> <td>paciente</td> <td>10k.</td> <td>80/110</td>  <td>sintomas 1</td> <td>12/12/12 </td> <td>pastillas</td> <td>dolofin</td>
                            </tr>
							<tr>
                                <td>2</td> <td>002</td> <td>paciente2</td> <td>10k.</td> <td>80/110</td>  <td>sintomas 2</td> <td>12/12/12 </td> <td>pastillas</td> <td>dolofin</td>
                            </tr>
                            <tr>
                                <td>3</td> <td>003</td> <td>paciente3</td> <td>10k.</td> <td>80/110</td>  <td>sintomas 3</td> <td>12/12/12 </td> <td>pastillas</td> <td>dolofin</td>
                            </tr>
                </table>
		<?php
		break;

	case '6':
		//Instruccion mysql para consultar enfermeros
		echo "tratamiento";

		?>

		<table class = "table table-striped table-hover">
                    <h1 >Tratamiento</h1>
                            <tr>
                                <th>Codigo_Paciente </th>
                                <th>Codigo_Doctor</th>
                                <th>tratamiento</th>
                                <th>dosis</th> 
                                <th>duracion</th>
                                <th>Fecha_Inicio</th>
                                <th>Fecha_Finalizacion</th>
                                
                            </tr>                   
                            <tr>
                                <td>1</td> <td>001</td> <td>Pastillas</td> <td>2 cada hora</td> <td>10 dias</td>   <td>12/12/12 </td> <td>13/12/12</td> 
                            </tr>
							<tr>
                                <td>1</td> <td>001</td> <td>Pastillas2</td> <td>2 cada hora</td> <td>10 dias</td>   <td>12/12/12 </td> <td>13/12/12</td> 
                            </tr>
                            <tr>
                                <td>1</td> <td>001</td> <td>Pastillas3</td> <td>2 cada hora</td> <td>10 dias</td>   <td>12/12/12 </td> <td>13/12/12</td> 
                            </tr>
                </table>
		<?php
	break;

	case '7':
		//Instruccion mysql para consultar enfermeros
		echo "citas";


		?>
		<table class = "table table-striped table-hover">
                    <h1> Citas </h1>
                            <tr>
                                <th>Codigo_Paciente </th>
                                <th>Codigo_Doctor</th>
                                <th>fecha_citas</th>
                                <th>Hora</th> 
                                <th>cupo</th>
                                
                            </tr>                   
                            <tr>
                                <td>1</td> <td>001</td> <td>12/12/12</td> <td>5:00</td> <td>1</td>   
                            </tr>
							<<tr>
                                <td>2</td> <td>002</td> <td>12/12/12</td> <td>5:00</td> <td>1</td>   
                            </tr>
                            <tr>
                                <td>3</td> <td>003</td> <td>12/12/12</td> <td>5:00</td> <td>1</td>   
                            </tr>
                </table>
		<?php
	break;

	case '8':
		//Instruccion mysql para consultar enfermeros
		echo "sucursales";

		?>
		 <table class = "table table-striped table-hover">
                    <h1 style="text-align:center">Sucursales</h1>
                            <tr>
                                <th>Nombre de Farmacia</th>
                                <th>Direccion</th>
                                <th>Telefono</th> 
                                
                            </tr>                   
                            <tr>
                            <td>Nombre Estatico</td> <td>Direccion</td> <td>numero</td> 
                            </tr>
                            <tr>
                            <td>Nombre Estatico2</td> <td>Direccion2</td> <td>numero2</td> 
                            </tr>
                            <tr>
                            <td>Nombre Estatico3</td> <td>Direccion3</td> <td>numero3</td> 
                            </tr>
                   
                </table>

		<?php
	break;
	case '9':
		//Instruccion mysql para consultar enfermeros
		echo "Medicamentos";

		?>
		<table class = "table table-striped table-hover">
                    <h1 style="text-align:center">Registro De Medicamento</h1>
                            <tr>
                                <th>Nombre del Medicamento</th>
                                <th>Codigo de Producto</th>
                                <th>Fecha de Elaboracion</th>
                                <th>Fecha de Vencimiento</th>
                                <th>Cantidad</th>        				
        				    <tr>
                            <td>Nombre Estatico</td> <td>Codigo Estatico</td>  <td>Fecha Elaboraion</td>  <td>Fecha Vencimiento</td>  <td>Cantidad</td>
                            <tr>
                            <tr>
                            <td>Nombre Estatico</td> <td>Codigo Estatico</td>  <td>Fecha Elaboraion</td>  <td>Fecha Vencimiento</td>  <td>Cantidad</td>
                            <tr>
                            <tr>
                            <td>Nombre Estatico</td> <td>Codigo Estatico</td>  <td>Fecha Elaboraion</td>  <td>Fecha Vencimiento</td>  <td>Cantidad</td>
                            <tr>
                            <tr>
                            <td>Nombre Estatico</td> <td>Codigo Estatico</td>  <td>Fecha Elaboraion</td>  <td>Fecha Vencimiento</td>  <td>Cantidad</td>
                            <tr>
                            <tr>
                            <td>Nombre Estatico</td> <td>Codigo Estatico</td>  <td>Fecha Elaboraion</td>  <td>Fecha Vencimiento</td>  <td>Cantidad</td>
                            <tr>
                            <tr>
                            <td>Nombre Estatico</td> <td>Codigo Estatico</td>  <td>Fecha Elaboraion</td>  <td>Fecha Vencimiento</td>  <td>Cantidad</td>
                            <tr>
                                


                            </tr>                    
                </table>

		<?php
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