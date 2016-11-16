<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Inicio Sesion</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/signin.css" rel="stylesheet">


    
  </head>

  <body>

    <div class="container">

      <div class="form-signin">
        <h2 class="form-signin-heading">Inicio Sesion</h2>
        
        <label for="inputEmail" class="sr-only">Codigo</label>
        <input type="text" id="txt-codigo" class="form-control" placeholder="codigo" required autofocus>

        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="txt-contraseña" class="form-control" placeholder="Contraseña" required>
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordar codigo y contraseña
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn-ingresar">Ingresar</button>
      </div>

    </div> 


    
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/controlador_login.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
