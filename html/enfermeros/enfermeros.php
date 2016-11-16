<html>
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
                        
                        <li class="divider"></li>
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
                        <a href="../../index_enfermeros.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="../paciente/crear_expediente.php"><i class="fa fa-fw fa-user"></i> Crear Expediente</a>
                    </li>
                    <li>
                        <a href="ver_expediente.php"><i class="fa fa-fw fa-user"></i> Ver Expediente</a>
                    </li>
                    <li class="active">
                        <a href="enfermeros.php"><i class="fa fa-fw fa-user"></i> Pre-clinica</a>
                    </li>
                    <li>
                        <a href="citas.php"><i class="fa fa-fw fa-user"></i> Gestion de Citas</a>
                    </li>
                    
                </ul>
            </div>
           
        </nav>
        

        <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">

<table class = "table table-striped table-hover">
                    <h1 style="text-align:center">Preclinica</h1>
                            <tr>
                                <td>Numero Expediente</td>
                                <td>
                                    <input type="text" name="txt-numero" id="txt-numero" class="form-control">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Peso</td>
                                <td>
                                    <input type="text" name="txt-peso" id="txt-peso" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Altura</td>
                                <td>
                                    <input type="text" name="txt-altura" id="txt-altura" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Temperatura</td>
                                <td>
                                    <input type="text" name="txt-temperatura" id="txt-temperatura" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Presion Arterial</td>
                                <td>
                                    <input type="text" name="txt-presion" id="txt-presion" class="form-control">
                                </td>
                            </tr>
                            
                        
                            <tr>
                                <td colspan="2">
                                    <button name="btn-guardarPreClinica" id="btn-guardarPreClinica" class="btn btn-primary">Guardar</button> <button name="btn-cancelar" id="btn-cancelar" class="btn btn-danger">Cancelar</button>
                                </td>
                            </tr>                    
                </table>
                    </div>
                </div>
            </div>
        </div>
           
    
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/controlador_Enfermero.js"></script>


   
    
</body>

</html>