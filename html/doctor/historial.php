<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica "El Milagro"</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/sb-admin.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

</head>

<body>
<div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../index.php">Menu</a>
            </div>
            <ul class="nav navbar-right top-nav">

                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuario <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Menu lateral -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="../../index_doctor.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>

                     <li >
                        <a href="expediente.php"><i class="fa fa-fw fa-gear"></i>Expediente</a>
                    </li>
                     <li class="active">
                        <a href="historial.php"><i class="fa fa-fw fa-gear"></i>Historial Medico</a>
                    </li>
                     <li>
                        <a href="receta.php"><i class="fa fa-fw fa-gear"></i>Receta</a>
                    </li>
                </ul>
            </div>
           
        </nav>
           
        </nav>
        <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <table class = "table table-striped table-hover">
                    
                            
                </table>
            </div>
             
             <h1>Historial Medico</h1>
             
             


             
            <div class="col-lg-9 well">
                <table class = "table table-striped table-hover">   
                 <tr>
                        <td>
                             <input type="text" name="busqueda" id="txt-busqueda"  placeholder="Codigo_empleado" autocomplete=”on”  class="form-control">
                        </td>
                        <td>
                           
                           <button name="btn-buscar" id="btn-buscar" class="btn btn-warning">Buscar</button>
                
                        </td>
                    </tr>  
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Fecha de Visita</td>
                                <td><input type="text" id="txt-fechaVisita" class="form-control" disabled="disabled"></td>
                            </tr>
                             <tr>
                                <td>Edad:</td>
                                <td><input type="text" id="txt-edad" class="form-control" disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>Peso</td>
                                <td><input type="text" id="txt-peso" class="form-control" disabled="disabled"></td>
                            </tr>
                             <tr>
                                <td>Altura</td>
                                <td><input type="text" id="txt-altura" class="form-control" disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>Temperatura</td>
                                <td><input type="text" id="txt-temperatura" class="form-control" disabled="disabled"></td>
                            </tr>
                             <tr>
                                <td>Presion:</td>
                                <td><input type="text" id="txt-presion" class="form-control" disabled="disabled"></td>
                            </tr> 
                </table>            
 
                <table class = "table table-striped table-hover">  
                            <tr>
                                <td>Sintomas presentados: </td>
                                <tr>
                                    <td>
                                    <textarea type="text" id="txt-sintomas" class="form-control" disabled="disabled"></textarea>
                                    </td>
                                </tr>
                            </tr>
                            <tr>
                                <td>Tratamiento: </td>
                                <tr>
                                    <td>
                                    <textarea type="text" id="txt-tratamiento" class="form-control" disabled="disabled"></textarea>
                                    </td>
                                </tr>
                            </tr>
                            <tr>
                                <td>Medicamento: </td>
                                <tr>
                                    <td>
                                    <textarea type="text" id="txt-medicamento" class="form-control" disabled="disabled"></textarea>
                                    <td>
                                </tr>
                            </tr>                                                                              
                            <tr>
                                <td colspan="2">
                                    <button name="" id=""
                                    class="btn btn-warning">Cancelar</button>
                                </td>
                            </tr>     

                </table>
            </div>


            <div class="col-lg-3 well">
                <img  style=" rigth: 200px;" src="../../img/UserGroup.jpg" class="img-responsive img-thumbnail">
            </div>
          


    

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/controlador_doctores.js" type="text/javascript"></script>



</body>

</html>
