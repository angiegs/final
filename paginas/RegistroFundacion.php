<!DOCTYPE html>
<html>

<head>
    <title>Registro de fundación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/LogoSupportYou.png" />
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='../css/estiloRegistro.css' rel='stylesheet' type='text/css'>
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../index.php"><img alt="LogoAplicacion" id="estilo_logo" src="../img/LogoSupportYou.png"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <br>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <?php
                        echo"<a class='page-scroll' href='../paginas/RegistroFundacion.php'>FUNDACIONES</a>"
                        ?>
                    </li>

                    <li>
                        <?php
                        echo"<a class='page-scroll' href='../paginas/contactos.php'>CONTÁCTENOS</a>"
                        ?>
                    </li>
                        
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">

            <div class="col-md-3">
                <form class="form-signin">
                    <h2 class="form-signin-heading">Inicia Sesión</h2>
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Recuérdame
                        </label>
                    </div>
                    <button id="boton2" class="btn btn-lg btn-primary btn-block" type="submit" onClick="location.href='../paginas/PerfilFundacion.html'">Iniciar sesión</button>

                </form>

            </div>

    

        </div>

    </div>
    <!-- /.container -->




    <!-- /.container-->

    <footer id="footer1">


        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
