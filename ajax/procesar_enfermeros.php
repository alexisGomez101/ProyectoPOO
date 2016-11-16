<?php 
switch ($_GET["accion"]) {
    case '1':
    //Validacion
        
   $fechaVisita = $_POST["txt-fechaVisita"];
    $nombre =   $_POST["txt-nombre"];
    $apellidos =  $_POST["txt-apellidos"];
    $fechaNacimiento = $_POST["txt-fechaNacimiento"];
    $Edad =   $_POST["txtEdad"];
    $id =  $_POST["txt-id"];
    $direccion =  $_POST["txt-direccion"];
    $telefono = $_POST["txt-telefono"];
    $estado=$_POST["slc-estado"];
    $genero=$_POST["slc-genero"];
    $Observaciones= $_POST["txt-Observaciones"];


    
        if (strlen($fechaVisita)==0||strlen($nombre)==0||strlen($estado)==0){
            if(strlen($Edad)==0||strlen($id)==0||strlen($genero)==0){
                if(strlen($telefono)==0||strlen($fechaNacimiento)==0){
                    if (strlen($apellidos)==0||strlen($direccion)==0||strlen($Observaciones)==0){
                    
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
        echo "busqueda";
        break;

    case '3':
        $numero = $_POST["txt-numero"];
        $peso = $_POST["txt-peso"];
        $altura = $_POST["txt-altura"];
        $temperatura = $_POST["txt-temperatura"];
        $presion = $_POST["txt-presion"];

        if (strlen($numero)==0||strlen($peso)==0||strlen($altura)==0||strlen($temperatura)==0||strlen($presion)==0) {
            echo "Y";
            }
        else{
            echo "N";
            }
    break;
    case '4':
        echo "citas";
        break;
    
    default:
        echo "Error";
        break;
}


/*
    
        */

 ?>