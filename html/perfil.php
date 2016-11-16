html>
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
                <a class="navbar-brand" href="index.php">Menu</a>
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
                            <a href="perfil.php"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensajes </a>
                        </li>  
                         <li>
                            <a href="configuracion.php"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
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
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="doctores.php"><i class="fa fa-fw fa-user"></i> Doctores</a>
                    </li>
                    <li>
                        <a href="enfermeros.php"><i class="fa fa-fw fa-user"></i> Enfermeros</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i> Paciente <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
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
                        <a href="javascript:;" data-toggle="collapse" data-target="#farmacia"><i class="fa fa-fw fa-user"></i> Farmacia <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="farmacia" class="collapse">
                            <li>
                                <a href="#">Sucursales</a>
                            </li>
                            <li>
                                <a href="#">Medicamentos</a>
                            </li>
                            
                        </ul>
                    </li>

                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#cuentas"><i class="fa fa-fw fa-user"></i> Cuentas Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cuentas" class="collapse">
                            <li>
                                <a href="crear_cuentas_usuarios.php">Crear Cuenta</a>
                            </li>
                            <li>
                                <a href="actualizar_cuentas_usuario.php">Actualizar Cuenta</a>
                            </li>
                            <li>
                                <a href="eliminar_cuentas_usuario.php">Eliminar cuenta</a>
                            </li>
                            
                        </ul>
                    </li>
                   
                   
                    <li>
                        <a href="asistencia_medica.php"><i class="fa fa-fw fa-pencil"></i> Asistencias Medicas</a>
                    </li>

                     <li>
                        <a href="configuracion.php"><i class="fa fa-fw fa-gear"></i>Configuracion</a>
                    </li>
                    
                    <
                </ul>
            </div>
           
        </nav>
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12"> 
                        <div class="col-lg-9">
                            <table class = "table table-striped table-hover">
                            <tr><h2>Perfil</h2></tr>
                                <tr>
                                <td>Nombres</td>
                                <td>
                                    <input type="text" name="txt-nombre" id="txt-nombre" class="form-control" disabled="disabled" value="Juan">
                                </td>
                            </tr>
                            <tr>
                                <td>Apellidos</td>
                                <td>
                                    <input type="text" name="txt-apellidos" id="txt-apellidos" class="form-control"  disabled="disabled" value="Perez">
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha de Nacimiento:</td>
                                <td>
                                    <input type="text" name="txt-fechaNacimiento" id="txt-fechaNacimiento" class="form-control"  disabled="disabled">
                                </td>
                            </tr>
                            <tr>
                                <td>Edad:</td>
                                <td>
                                    <input type="text" name="txtEdad" id="" class="form-control"  disabled="disabled">
                                </td>
                            </tr>
                            <tr>
                                <td>Identidad:</td>
                                <td>
                                    <input type="text" name="txt-id" id="txt-id" class="form-control"  disabled="disabled">
                                </td>
                            </tr>
                            <tr>
                                <td>Direccion:</td>
                                <td>
                                    <input type="text" name="txt-direccion" id="txt-direccion" class="form-control"  disabled="disabled">
                                </td>
                            </tr>
                            <tr>
                                <td>Telefono:</td>
                                <td>
                                    <input type="text" name="txt-teleono" id="txt-telefono" class="form-control"  disabled="disabled">
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
                            <tr>
                                <td>Fecha de Ingreso:</td>
                                <td>
                                    <input type="date" name="txt-fechaIngreso" id="txt-fechaIngreso" class="form-control"  disabled="disabled">
                                </td>
                            </tr>
                            <tr>
                                <td>Codigo</td>
                                <td>
                                    <input type="text" name="txt-codigo" id="txt-codigo" class="form-control" disabled="disabled">
                                </td>
                            </tr>
                            <tr>
                                <td>Contraseña</td>
                                <td>
                                    <input type="text" name="txt-contraseña" id="txt-contraseña" class="form-control"  disabled="disabled">
                                </td>
                            </tr>
                            <tr>
                                <td>Area</td>
                                <td>
                                    <input type="text" name="txt-area" id="txt-area" class="form-control"  disabled="disabled">
                                </td>
                            </tr>
                            <tr>
                                <td>Turno de trabajo</td>
                                <td>
                                     <input type="text" name="txt-turnoTrabajo" id="txt-turnoTrabajo" class="form-control"  disabled="disabled">
                                </td>   
                            </tr>
                    </table>
                    
                </div>
                <div class="col-lg-3">
                            <img src="../img/doctor1.jpg" class="img-responsive img-thumbnail">

                        </div>
            </div>
        </div>
    </div>
    
</div>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
