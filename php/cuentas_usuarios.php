<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica "El Milagro"</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

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
                                <a href="html/formulario_receta.php">Nueva Receta</a>
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
                                <a href="html/formulario_receta.php">Nueva Receta</a>
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
                        <a href="cuentas_usuarios.php"><i class="fa fa-fw fa-edit"></i> Cuentas de usuarios</a>
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
                    
                    <
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
                                <td>Fecha de Nacimiento:</td>
                                <td>
                                    <input type="text" name="txt-fechaNacimiento" id="txt-fechaNacimiento" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Edad:</td>
                                <td>
                                    <input type="text" name="txtEdad" id="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Identidad:</td>
                                <td>
                                    <input type="text" name="txt-id" id="txt-id" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Direccion:</td>
                                <td>
                                    <input type="text" name="txt-direccion" id="txt-direccion" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Telefono:</td>
                                <td>
                                    <input type="text" name="txt-teleono" id="txt-telefono" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Genero</td>
                                <td>
                                    <label><input type="checkbox" name="chk-genero" id="chk-genero" value="Femenino">Femenino</label>
                                    <label><input type="checkbox" name="chk-genero" id="chk-genero" value="Masculino">Masculino</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Estado</td>
                                <td>
                                    <select name="slc-estado" id="slc-estado" class="form-control">
                                        <option value="Soltero">Soltero</option>
                                        <option value="Soltero">Casado</option>
                                        <option value="Soltero">Union Libre</option>
                                        <option value="Soltero">Divorciado</option>
                                        <option value="Soltero">Viudo</option>
                                    </select>
                                </td>
                            </tr>
                </table>
            </div>
            <div class="col-lg-3">
                <img src="../img/doctor1.jpg" class="img-responsive img-thumbnail">
            </div>
            <div class="col-lg-12"> 
                <table class = "table table-striped table-hover">    
                            <tr><h2>Informacion Empresarial</h2></tr>
                            
                            <tr>
                                <td>Fecha de Ingreso:</td>
                                <td>
                                    <input type="text" name="txt-fechaIngreso" id="txt-fechaIngreso" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Codigo</td>
                                <td>
                                    <input type="text" name="txt-codigo" id="txt-codigo" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Contraseña</td>
                                <td>
                                    <input type="text" name="txt-contraseña" id="txt-contraseña" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Area</td>
                                <td>
                                    <input type="text" name="txt-area" id="txt-area" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Turno de trabajo</td>
                                <td>
                                     <input type="text" name="txt-turnoTrabajo" id="txt-turnoTrabajo" class="form-control">
                                </td>   
                            </tr>
                            <tr>
                                <td>Sueldo</td>
                                <td>
                                    <input type="text" name="txt-sueldo" id="txt-sueldo" class="form-control">
                                </td>
                            </tr>
                            

                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="btn-guardar" 
                                    value="Guardar" class="btn btn-primary">
                                    <input type="reset" name="btn-limpiar" 
                                    value="Limpiar" class="btn btn-warning">
                                </td>
                            </tr>
                </table>
            </div>
            


    

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
