<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica "El Milagro"</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">  
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html">Menu</a>
            </div>
            <ul class="nav navbar-right top-nav">

            <!--Mensaje y el icono -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">

                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Usuario</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i>Lunes 15/septiembre72016 </p>
                                        <p>Este es un mensaje</p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="message-footer">
                            <a href="#">Leer todos los mensajes nuevos</a>
                        </li>
                    </ul>
                </li>
                <!-- Termina los mensaje-->

                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuario <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensajes </a>
                        </li>  
                         <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-question"></i>Ayuda </a>
                         </li> 
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
                    

                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Doctores"><i class="fa fa-fw fa-user"></i>Doctores<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Doctores" class="collapse">
                            <li>
                                <a href="formulario_receta.php">Nueva Receta</a>
                            </li>
                            <li>
                                <a href="#">Ver Expediente</a>
                            </li>
                             <li>
                                <a href="#">Llenar Expediente</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Enfermeros"><i class="fa fa-fw fa-user"></i>Enfermeros<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Enfermeros" class="collapse">
                            <li>
                                <a href="formulario_receta.php">Nueva Receta</a>
                            </li>
                            <li>
                                <a href="#">Ver Expediente</a>
                            </li>
                             <li>
                                <a href="#">Llenar Expediente</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Paciente"><i class="fa fa-fw fa-user"></i> Paciente <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Paciente" class="collapse">
                        <li>
                                <a href="#">Expediente</a>
                            </li>
                            <li>
                                <a href="#">Historial Medico</a>
                            </li>
                            <li>
                                <a href="#">Tratamientos</a>
                            </li>
                            <li>
                                <a href="#">Citas</a>
                            </li>
                            <li>
                                <a href="#">Recetas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="html/cuentas_usuarios.php"><i class="fa fa-fw fa-edit"></i> Cuentas de usuarios</a>
                    </li>
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Farmacia"><i class="fa fa-fw fa-plus"></i> Farmacia<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Farmacia" class="collapse">
                            <li>
                                <a href="#">Medicamentos</a>
                            </li>
                            <li>
                                <a href="#">Sucursales</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="html/asistencia_medica.html"><i class="fa fa-fw fa-pencil"></i> Asistencias Medicas</a>
                    </li>

                     <li>
                        <a href="html/configuracion.html"><i class="fa fa-fw fa-gear"></i>Configuracion</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        <table class = "table table-striped table-hover">
                            <h1>Informacion personal</h1>
                            <tr>
                                <td>Nombres</td>
                                <td>
                                    <input type="text" name="txt-nombre" id="txt-nombre" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Apellidos</td>
                                <td>
                                    <input type="text" name="txt-apellidos" id="txt-apellidos" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Peso:</td>
                                <td>
                                    <input type="text" name="txt-peso" id="txt-peso" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Talla:</td>
                                <td>
                                    <input type="text" name="txt-talla" id="txt-talla" class="form-control">
                                </td>
                            </tr>
                             <tr>
                             <tr>
                                <td>Telefono:</td>
                                <td>
                                    <input type="text" name="txt-telefono" id="txt-telefono" class="form-control">
                                </td>
                            </tr>
                             <tr>
                                <td>Fecha de Ingreso:</td>
                                <td>
                                    <input type="text" name="txt-fecha" id="txt-fecha" class="form-control">
                                </td>
                            </tr>
                                 <tr>
                                <td>Direccion:</td>
                                <td>
                                    <input type="text" name="txt-direccion" id="txt-direccion" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Sexo</td>
                                <td>
                                    <select name="slc-estado" id="slc-estado" class="form-control">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
                

                
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>





































