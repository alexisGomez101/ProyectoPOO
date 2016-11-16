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
                <a class="navbar-brand" href="../index.php">Menu</a>
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
                    

                    <li>
                        <a href="../../index_farmacia.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="registrar_medicamento.php"><i class="fa fa-fw fa-user"></i> Registrar Medicamento </a>
                    </li>
                    <li>
                        <a href="ver_registros_medicamentos.php"><i class="fa fa-fw fa-user"></i> Ver Medicamentos</a>
                    </li>
                    <li>
                        <a href="Actualizar_medicamento.php"><i class="fa fa-fw fa-user"></i>Actualizar Medicamento</a>
                    </li>
                    <li>
                        <a href="eliminar_medicamento.php" ><i class="fa fa-fw fa-user"></i>Eliminar Medicamento</a>

                    </li>

                    <li>
                    <li>
                        <a href="pagar_medicamento.php"><i class="fa fa-fw fa-user"></i>Pagar Medicamento</a>


                     <li>
                        <a href="sucursales.php" ><i class="fa fa-fw fa-user"></i> </i>Sucursales</a>

                    </li>

                    <li class="active">
                        <a href="recetas.php"><i class="fa fa-fw fa-pencil"></i>Recetas</a>
                    </li>


                </ul>
            </div>
           
        </nav>


       <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class = "table table-striped table-hover">
                    <h1 style="text-align:center">Recetas</h1>
                            <tr>
                                <th>Codigo de Paciente</th>
                                <th>Nombre de Paciente</th>
                                <th>Receta</th>
                                                 
                            <tr>
                            <td><input type="text" name="txt-codigoPaciente"> <button class="btn btn-primary" id="btn-ir">ir</button></td> <td>Nombre</td>  <td><a href="prueba.pdf">ver</a></td> 
                            <tr>
                            <tr>
                            <td><input type="text" name="txt-codigoPaciente"> <button class="btn btn-primary" id="btn-ir">ir</button></td> <td>Nombre</td>  <td><a href="prueba.pdf">ver</a></td> 
                            <tr>
                            <tr>
                            <td><input type="text" name="txt-codigoPaciente"> <button class="btn btn-primary" id="btn-ir">ir</button></td> <td>Nombre</td>  <td><a href="prueba.pdf">ver</a></td> 
                            <tr>
                            <tr>
                            <td><input type="text" name="txt-codigoPaciente"> <button class="btn btn-primary" id="btn-ir">ir</button></td> <td>Nombre</td>  <td><a href="prueba.pdf">ver</a></td> 
                            <tr>
                                
        <?php
             include_once("../../fpdf/fpdf.php");
             $pdf=new FPDF();
             $pdf->AddPage();
             $pdf->SetFont('Arial','B',16);
             $pdf->Cell(40,10,'PDF creado, a partir de las recetas otorgadas por el Doctor. ');
             $pdf->Output('prueba.pdf','F');
        ?>


                            </tr>                    
                </table>
            </div>
        
     
            </div>
        </div>
    </div>
    

    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
     <script type="text/javascript" src="../../js/controlador_farmacia.js"></script>
    

</body>

</html>