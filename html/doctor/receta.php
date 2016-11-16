<html>
<html lang="en">

<head>

    meta charset="utf-8">
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Menu lateral -->
            <!-- Menu lateral -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="../../index_doctor.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>

                     <li >
                        <a href="expediente.php"><i class="fa fa-fw fa-gear"></i>Expediente</a>
                    </li>
                     <li >
                        <a href="historial.php"><i class="fa fa-fw fa-gear"></i>Historial Medico</a>
                    </li>
                     <li class="active">
                        <a href="receta.php"><i class="fa fa-fw fa-gear"></i>Receta</a>
                    </li>
                </ul>
            </div>
           
        </nav>
        <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
            
             

             <h1>Receta</h1>

            <div class="col-lg-11 "> 
                <table class = "table table-striped table-hover">  
              
                            <tr>
                                <td >Nº. Expediente:</td>
                                    <td colspan="2" >
                                        <input type="text" name="txt-noExpediente" id="txt-noExpediente" class="form-control">
                                    </td>
                            </tr>
                            <tr>
                                 <td >Fecha: </td>
                                <td colspan="2">
                                    <input type="text" name="txt-fecha" id="txt-fecha" class="form-control">
                                </td>

                            </tr>
                            

                            <tr >
                                <td >Nombre</td>
                                <td colspan="2">
                                    <input type="text" name="txt-nombre" id="txt-nombre" class="form-control">
                                </td>
                                
                            </tr>
                            
                            
                            <tr>
                                <td>Doctor</td>
                                <td>
                                    <input type="text" name="txt-edad" id="txt-edad" class="form-control">
                                </td>
                                 <td> Cantidad </td>
                                <td>
                                    <input type="text" name="txt-peso" id="txt-peso" class="form-control"></td>
                            </tr>

                </table>              


                <table class = "table table-striped table-hover">          
                            <tr>
                                <td>Descripcion </td>
                                <tr>
                                    <td>
                                    <textarea type="text" name="txt-descripcion" id="txt-descripcion" class="form-control"></textarea>
                                    </td>
                                </tr>
                            </tr>
                                                                                                 
                            <tr>
                                <td colspan="2">
                                    <button name="btn-guardar" id="btn-guardar" class="btn btn-primary">Guardar</button>
                                    <button name="btn-imprimir" id="btn-imprimir" class="btn btn-warning">Imprimir</button>
                                </td>
                            </tr>     

                </table>
        </div>
        </div>
    </div>
    

    <script src="../../js/jquery.js"></script>

    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/controlador_doctores.js" type="text/javascript"></script>


</body>

</html>
