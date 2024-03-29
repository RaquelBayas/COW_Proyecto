<?php
    require_once 'config.php';

    if(isSet($_SESSION['email'])) {
        header("Location: private.php");
        exit;
    }

    if(isSet($_POST['submit'])){
        $do_login = true;
        include_once 'do_login.php';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/StyleSheet.css" rel="stylesheet" type="text/css"/>

        <script src="css/jquery_3_4_0/jquery_3_4_0/jquery-3.4.0.min.js"></script>
        <script src="css/bootstrap-4.3.1_v2/bootstrap-4.3.1_v2/js/jquery.min.js"></script>
        <script src="css/bootstrap-4.3.1_v2/bootstrap-4.3.1_v2/js/popper.min.js"></script>
        <script src="css/bootstrap-4.3.1_v2/bootstrap-4.3.1_v2/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
         <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>                      
        <link href="css/bootstrap-4.3.1_v2/bootstrap-4.3.1_v2/css/bootstrap.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <header class="header">
            <h1>BE DREAMS</h1>
            <nav class="navbar navbar-expand-lg navbar-light" id="barra-nav">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto" id="navbar-center" >
                    <li class="nav-item active">
                      <a class="nav-link" id="link-nav" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-nav" href="#">Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-nav" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-nav" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-nav" href="reservas.php">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-nav" href="#">Perfil</a>
                    </li>
                  </ul>
                </div>
            </nav>           
        </header>
        <br>
        <div class=row">
        <div class="container-fluid text-center">    
            <div class="row justify-content">
            <div class="col-sm-6 mx-auto">
            <form method="post"  class="formlogin" name="login" action="perfil.php" id="form-login">
                <span class="form-label" >Email</span>
                <input type="text" name="email" id="email" class="form-control">
                <span class="form-label" >Contraseña</span>
                <input type="text" name="password" id="password" class="form-control">
                <label for="remember-me">Recordarme</label>
                <input type="checkbox" name="autologin" value="1">
                <input type="submit" name="submit" id="submit" value="Login">
            </form>
        </div>
        </div>
        <div class="footer">
            <h6>&copy; All Rights Reserved.</h6>
            <a href="https://www.linkedin.com/in/raquelbayas/">Desarrollado por Raquel Bayas - COW 2020/2021</a>
        </div>
    </div>
</body>

</html>