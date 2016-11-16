html>
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
                        <a href="../../index_admin.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="doctores.php"><i class="fa fa-fw fa-user"></i> Doctores</a>
                    </li>
                    <li>
                        <a href="enfermeros.php"><i class="fa fa-fw fa-user"></i> Enfermeros</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#paciente"><i class="fa fa-fw fa-user"></i> Paciente <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="paciente" class="collapse">
                            <li>
                                <a href="expediente_Admon.php">Expediente</a>
                            </li>
                            <li>
                                <a href="tratamiento.php">Tratamiento</a>
                            </li>
                            
                            <li>
                                <a href="citas.php">Citas</a>
                            </li>
                            
                        </ul>
                    </li>

                   <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#farmacia"><i class="fa fa-fw fa-user"></i> Farmacia <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="farmacia" class="collapse">
                            <li>
                                <a href="sucursales.php">Sucursales</a>
                            </li>
                            <li>
                                <a href="ver_registros_medicamentos.php">Medicamentos</a>
                            </li>
                            
                        </ul>
                    </li>

                    

                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#cuentas"><i class="fa fa-fw fa-user"></i> Cuentas Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cuentas" class="collapse">
                            <li>
                                <a href="crear_cuentas_usuarios.php">Crear Cuenta</a>
                            </li>
                            <li class="active">
                                <a href="actualizar_cuentas_usuario.php">Actualizar Cuenta</a>
                            </li>
                            <li>
                                <a href="eliminar_cuentas_usuario.php">Eliminar cuenta</a>
                            </li>
                            
                        </ul>
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
                        <td>
                             <input type="text" name="busqueda" id="txt-busqueda"  placeholder="Codigo_Empleado" autocomplete=”on”  class="form-control">
                        </td>
                        <td>
                           
                           <button name="btn-buscar" id="btn-buscar"
                            class="btn btn-warning">Buscar</button>
                
                        </td>
                    </tr>

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
                                    <input type="date" name="txt-fechaNacimiento" id="txt-fechaNacimiento" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Edad:</td>
                                <td>
                                    <input type="text" name="txtEdad" id="txtEdad" class="form-control">
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
                                    <input type="tel" name="txt-teleono" id="txt-telefono" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Genero</td>
                                <td>
                                    <select name="slc-genero" id="slc-genero" class="form-control">
                                        <option selected="selected"></option>
                                        <option value="femenino">Femenino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Estado</td>
                                <td>
                                    <select name="slc-estado" id="slc-estado" class="form-control">
                                     <option selected="selected"></option>
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
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <img src="../../img/doctor1.jpg" class="img-responsive img-thumbnail">
            </div>

            <div class="col-lg-12"> 
                <table class = "table table-striped table-hover">    
                            <tr><h2>Informacion Empresarial</h2></tr>
                            
                            <tr>
                                <td>Fecha de Ingreso:</td>
                                <td>
                                    <input type="date" name="txt-fechaIngreso" id="txt-fechaIngreso" class="form-control">
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
                                     <button name="btn-eliminar" id="btn-eliminar" class="btn btn-primary">Eliminar</button>
                                    <button name="btn-cancelar" id="btn-cancelar" class="btn btn-danger">Cancelar</button>
                                </td>
                            </tr>
                </table>
            </div>
        </div>
    </div>
    

    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/controlador_admin.js"></script>
  

</body>

</html>
