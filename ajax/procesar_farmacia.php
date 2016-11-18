<?php  
switch ($_GET["accion"]) {
	case '1':

	$nombre = $_POST["txt-nombre"];
	$cantidad = $_POST["txt-cantidad"];
	$fechaElaboracion = $_POST["txt-fechaElaboracion"];
	$fechaVencimiento= $_POST["txt-fechaVencimiento"];
	$precio = $_POST["txt-precio"];


	if (strlen($nombre)==0||strlen($cantidad)==0||strlen($fechaVencimiento)==0||strlen($fechaElaboracion)==0||strlen($precio)==0) {
		echo "Y";
		}
	else{
		echo "N";
		}
		
		break;

	case '2':
        include_once("../class/class_conexion.php");
		include_once("../class/class_sucursal.php");
        include_once("../class/class_eliminarMedicamento.php");
     
       $conexion = new Conexion();
       $registro = new eliminar_medicamento();

       $registro -> eliminarRegistro($conexion,$_POST["txt-codigo"]);


		break;

	case '3':
		
            include_once("../class/class_conexion.php");
            $conexion = new Conexion();

                $resultado= $conexion->ejecutarInstruccion(
                     'SELECT   nombre  ,cod_medicamento , cod_Sucursal, Cantidad, precio
                        FROM  tbl_medicinas');

         ?>
          <table class = "table table-striped table-hover">
                    <h1 style="text-align:center" >Pagos</h1>
                            <tr>

                                <th>Nombre del Medicamento</th>
                                <th>Codigo de Producto</th>
                                <th>Cantidad</th> 
                                <th>Precio</th>  
                                <th>Estado</th>  
                            </tr> 

    <?php 
            while($fila = $conexion->obtenerFila($resultado)){
        
    
     ?> 
                 
                            <tr>
                                <td><?php echo $fila["nombre"];?></td>
                                <td><?php echo $fila["cod_medicamento"]; ?></td> 
                                <td><?php echo $fila["Cantidad"]; ?></td> 
                                <td><?php echo $fila["precio"]; ?></td> 
                                <td><?php echo "cancelado"; ?></td> 
                                 
                               
                            </tr>          
                
          
         <?php
            }
            ?></table>
            <?php

		break;

	case '4':
		include_once("../class/class_conexion.php");


		$conexion = new Conexion();

				      $resultado= $conexion->ejecutarInstruccion(
           			 'SELECT id_receta, descripcion_receta
           			  FROM tbl_receta');


         ?>
          <table class = "table table-striped table-hover">
                    <h1 style="text-align:center" >Recetas</h1>
                            <tr>
                                <th>Numero Receta</th>
                                <th>Descripcion</th>
                                <td><?php echo '<a href="../farmacia/prueba3.pdf">ver recetas/PDF</a>';?></td> 
                              
                            </tr>
          
    
    <?php   
     //<button name="btn-crearPDF" id="btn-crearPDF" class="btn btn-primary">Crear</button>
            while($fila = $conexion->obtenerFila($resultado)){
    
     ?> 
      			 
                            <tr>
                                <td><?php echo $fila["id_receta"];?></td>
                                <td><?php echo $fila["descripcion_receta"]; ?></td> 
                                <td></td>               
                            </tr>          
                
          
         <?php
            }
            ?></table>
            <?php


		break;
	
	case '5':
		include_once("../class/class_conexion.php");
		$conexion = new Conexion();

				      $resultado= $conexion->ejecutarInstruccion(
           			 'SELECT cod_Sucursal, Nombre, Direccion, telefono 
           			  FROM tbl_sucursales');

         ?>
          <table class = "table table-striped table-hover">
                    <h1 style="text-align:center" >Sucursales</h1>
                            <tr>
                                <th>Nombre de Sucursal</th>
                                <th>Direccion</th>
                                <th>Telefono</th> 
                              
                            </tr>
          

    <?php 
            while($fila = $conexion->obtenerFila($resultado)){
     ?> 
      			                 <tr>
                                <td><?php echo $fila["Nombre"];?></td>
                                
                                <td><?php echo $fila["Direccion"]; ?></td> 
                                <td><?php echo $fila["telefono"]; ?></td> 
                            </tr>          
                
        <?php
            }
          ?>
          </table>
        <?php


		break;

	case '6':

	        include_once("../class/class_conexion.php");
	        $conexion = new Conexion();

		        $resultado= $conexion->ejecutarInstruccion(
           			 'SELECT   nombre  ,cod_medicamento ,  fecha_Elaboracion , fecha_Vencimiento, Cantidad
               		 	FROM  tbl_medicinas');

         ?>
          <table class = "table table-striped table-hover">
                    <h1 style="text-align:center">Medicamentos</h1>
                                <tr>
                                    <th>Nombre del Medicamento</th>
                                    <th>Codigo de Producto</th>
                                    <th>Fecha de Elaboracion</th>
                                    <th>Fecha de Vencimiento</th>
                                    <th>Cantidad</th> 
                                </tr>
          

    <?php 
            while($fila = $conexion->obtenerFila($resultado)){
        
    
     ?> 
      			 
                            <tr>
                                <td><?php echo $fila["nombre"];?></td>
                                
                                <td><?php echo $fila["cod_medicamento"]; ?></td> 
                                <td><?php echo $fila["fecha_Elaboracion"]; ?></td> 
                                <td><?php echo $fila["fecha_Vencimiento"]; ?></td> 
                                <td><?php echo $fila["Cantidad"]; ?></td>  
                               
                            </tr>          
                
          
         <?php
            }
            ?></table>
            <?php
		break;
	
	case '7':
		
			include_once("../class/class_conexion.php");
			$conexion = new Conexion();
			$resultado = $conexion->ejecutarInstruccion(
					sprintf(
						'SELECT * FROM tbl_medicinas WHERE cod_medicamento=%s',
						stripslashes($_POST["Codigo_Medicamento"])
					)
			);

			$fila = $conexion->obtenerFila($resultado);
			echo json_encode($fila);
			$conexion->cerrarConexion();


		break;

	case '8':
        include_once("../class/class_conexion.php");
		include_once("../class/class_sucursal.php");
        include_once("../class/class_registrarMedicamento.php");

       
       $conexion = new Conexion();
        $registro = new registrar_medicamento(null,
            $_POST["txt-nombre"],$_POST["txt-fechaElaboracion"],$_POST["txt-fechaVencimiento"],$_POST["txt-cantidad"],new Sucursal($_POST["txt-sucursal"]),$_POST["txt-precio"]
            );

        $registro -> guardarRegistro($conexion);




        break;

    case '9':
        include_once("../class/class_conexion.php");
		include_once("../class/class_sucursal.php");
        include_once("../class/class_actualizarMedicamento.php");

       
       $conexion = new Conexion();
        $registro = new actualizar_medicamento(null,
            $_POST["txt-nombre"],$_POST["txt-fechaElaboracion"],$_POST["txt-fechaVencimiento"],$_POST["txt-cantidad"],new Sucursal($_POST["txt-sucursal"]),$_POST["txt-precio"]
            );

        $registro -> actualizarRegistro($conexion,$_POST["txt-codigo"]);




        break;    




	default:
		echo "error";
		break;
}




?>