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
                        <a href="../paciente/crear_expediente.php""><i class="fa fa-fw fa-user"></i> Crear Expediente</a>
                    </li>
                    <li>
                        <a href="ver_expediente.php"><i class="fa fa-fw fa-user"></i> Ver Expediente</a>
                    </li>
                    <li>
                        <a href="enfermeros.php"><i class="fa fa-fw fa-user"></i> Pre-clinica</a>
                    </li>
                    <li class="active">
                        <a href="citas.php"><i class="fa fa-fw fa-user"></i> Gestion de Citas</a>
                    </li>
                </ul>

            </div>
           
        </nav>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Gestion de Citas</h3>
                            <p>Citas con los especialistas son las siguientes .</p>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ESPECIALISTA</th>
                                            <th>
                                               Doctor
                                                
                                            </th>
                                            <th>
                                                Centro
                                                
                                            </th>
                                            <th>
                                                Proxima Cita
                                                
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Cardiologia</th>
                                            <td>Ramiro Martinez</td>
                                            <td> Clinica El Milagro</td>
                                            <td>12/11/2016</td>
                                        </tr>
                                        <tr>
                                            <th>Reumatologia</th>
                                            <td>Gonzales</td>
                                            <td>Clinica El Milagro</td>
                                            <td>12/12/2016</td>
                                           
                                        </tr>
                                       
                                        <tr>
                                            <th>Psicologia</th>
                                            <td>Francisco Coello</td>
                                            <td>Clinica El Milagro</td>
                                            <td>16/11/2016 2:00 PM</td>
                                           
                                        </tr>
                                        <tr>
                                            <th>Ginecologia</th>
                                            <td> Lopez</td>
                                            <td> Clinica El Milagro</td>
                                            <td>02/02/2017 7:00 AM</td>
                                        </tr>
                                        <tr>
                                            <th>Odontologia</th>
                                            <td> Garcia</td>
                                            <td> Clinica El Milagro</td>
                                            <td>02/02/2017 10:00 AM</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <p> Las citas con los especialistas tienen que estar puntuales y con un acompañante por cualquier cosa que pueda surgir.</p>
                        </div>
                    </div>
                </div>
            </div>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</body>

</html>