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
    <link href="../../css/plugins/morris.css" rel="stylesheet">  
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
                <a class="navbar-brand" href="index.php">Menu</a>
            </div>
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuario <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      
                        <li>
                            <a href="html/login.html"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
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

                     <li class="active">
                        <a href="expediente.php"><i class="fa fa-fw fa-gear"></i>Expediente</a>
                    </li>
                     <li>
                        <a href="historial.php"><i class="fa fa-fw fa-gear"></i>Historial Medico</a>
                    </li>
                     <li>
                        <a href="receta.php"><i class="fa fa-fw fa-gear"></i>Receta</a>
                    </li>
                </ul>
            </div>
           
        </nav>
        
        <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">

        <div class="col-lg-11">
            <table class = "table table-striped table-hover">
                    
            </table>
        </div>
            
        <h1>Expediente<br></h1>
            <div id="respuesta" class="col-lg-11 well" >
                <h2>Datos Generales</h2>
                    <table class = "table table-striped table-hover">
                        <tr>
                            <td>Codigo</td>
                            <td>
                                <input type="text" class="form-control" id="txt-codigo">
                            </td>
                            <td>
                                <button id="btn-buscar" class="btn btn-primary">Buscar</button>
                            </td>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" id="txt-nombre" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Observaciones</td>
                            <td>
                                <textarea type="text"  id="txt-observaciones" class="form-control" > </textarea>
                            </td>
                        </tr>
                </table>

            <h2>Preclinica</h2>
                <table class = "table table-striped table-hover c">
                    <tr>
                        <td>Edad:</td>
                        <td><input type="text" id="txt-edad" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Peso</td>
                        <td><input type="text" id="txt-peso" class="form-control"></td>
                    </tr>
                     <tr>
                        <td>Altura</td>
                        <td><input type="text" id="txt-altura" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Temperatura</td>
                        <td><input type="text" id="txt-temperatura" class="form-control"></td>
                    </tr>
                     <tr>
                        <td>Presion:</td>
                        <td><input type="text" id="txt-presion" class="form-control"></td>
                    </tr> 
                </table>
                        
            <h2>Consulta</h2>
                <table class = "table table-striped table-hover">  
                        <tr>
                            <td>Sintomas</td>
                            <td>
                                <textarea type="text" id="txt-sintomas" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Tratamiento</td>
                            <td>
                                <select name="slc-tratamiento" id="slc-tratamiento" class="form-control" >
                                    <option value="analisismedico">Analisis Medico</option>
                                    <option value="examen">Examen</option>
                                    <option value="inyeccion">Inyección</option>
                                    <option value="nebulizacion">Nebulización</option>
                                    <option value="radiografias">Radiografías</option>
                                    <option value="ultrasonido">Ultrasonido</option>
                                    <option value="hemograma">Hemograma</option>
                                    <option value="tomografia">Tomografía</option> 
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Especificaciones: </td>
                            <td>
                                <textarea type="text" id="txt-especificaciones" class="form-control"></textarea>
                            <td>
                        </tr>
                    </table>
                
                <h2>Citas</h2>
                    <table class = "table table-striped table-hover">
                        <tr>
                            <td>Fecha </td>
                            <td>
                                <input type="text" id="txt-fecha-cita" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Hora</td>
                            <td>
                                <select name="slc-hora" id="slc-hora" class="form-control">
                                    <option value="1">6:00 am</option>
                                    <option value="2">7:00 am</option>
                            </td>
                        </tr>
                        <tr>
                            <td>Doctores</td>
                            <td>
                                <select name="slc-doctor" id="slc-doctor" class="form-control">
                                    <option value="1">Doctor1</option>
                                    <option value="2">Doctor2</option>       
                            </td>                  
                        </tr>
                    
                    <tr>
                        <td colspan="2">
                            <button id="btn-guardarExpendiente"
                            class="btn btn-primary">Guardar</button>
                            <button id="btn-cancelar"
                            class="btn btn-danger">Cancelar</button>
                        </td>
                    </tr> 
                </table>
            </div>

    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/controlador_doctores.js"></script>
   

</body>

</html>