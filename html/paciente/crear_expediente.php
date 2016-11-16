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

                    <li class="active">
                        <a href="crear_expediente.php"><i class="fa fa-fw fa-user"></i> Crear Expediente</a>
                    </li>
                    <li>
                        <a href="../enfermeros/ver_expediente.php"><i class="fa fa-fw fa-user"></i> Ver Expediente</a>
                    </li>
                    <li>
                        <a href="../enfermeros/enfermeros.php"><i class="fa fa-fw fa-user"></i> Pre-clinica</a>
                    </li>
                    <li>
                        <a href="../enfermeros/citas.php"><i class="fa fa-fw fa-user"></i> Gestion de Citas</a>
                    </li>
                    
                </ul>
            </div>
           
        </nav>
        <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">

        <div class="col-lg-9">
            <table class = "table table-striped table-hover">
                    
            </table>
        </div>
            
            <div id="respuesta" class="col-lg-9 well" >
                <table class = "table table-striped table-hover">


                            <tr>
                                <td>Fecha de Visita: </td>
                                <td><input type="date" name="txt-fechaVisita" id="txt-fechaVisita" class="form-control" ></td>
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
                            <tr>
                                    <td>Observaciones</td>
                                    <td><textarea rows="5" cols="35" class="form-control" name="txt-Observaciones" id="txt-Observaciones"> </textarea></td>
                                </tr>
                    <tr>
                        <td colspan="2">
                            <button name="btn-guardar" id="btn-guardar"
                            class="btn btn-primary">Guardar</button>
                            <button name="" id=""
                            class="btn btn-warning">Cancelar</button>
                        </td>
                    </tr>       
            
                    
                </table>
            </div>
            
            <div class="col-lg-3 well">
                <img src="../../img/UserGroup.jpg" class="img-responsive img-thumbnail">
            </div>
    
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/controlador_Enfermero.js"></script>

</body>

</html>
