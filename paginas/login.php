<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Support You</title>

    <!-- Bootstrap Core CSS -->
    <link rel="icon" type="image/png" href="../img/LogoSupportYou.png" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>


<body>
    <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <?php
                        echo"<a href='../index.php'><img alt='LogoAplicacion' id='estilo_logo' src='../img/LogoSupportYou.png'></a>"
                    ?>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->


    </nav>

    <div class="container">
        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->

        <br>
        <br>
        <!-- Portfolio Item Row -->
        <div class="row">


            <div class="col-md-4">
                <br>
                <br>
                <br>
                <br>


                <form class="form-signin" action="modelo/usuario/validarusuario.php" method="post">
                    <h2 class="form-signin-heading">Inicia Sesión</h2>
                    <label for="inputUsername" class="sr-only">Usuario</label>
                    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Recuérdame
                        </label>
                    </div>
                    <input id="boton2" class="btn btn-lg btn-primary btn-block" type="submit" value="IniciarSesion">
                    <h5>¿No tienes una cuenta?<button class="btn btn-lg btn-primary btn-block" type="submit" onClick="location.href='../index.php'">Regístrate</button> </h5>
                </form>

            </div>



            <br>
            <br>
            <br>
            <div class="col-md-8">
                <img class="img-responsive" src="../img/5.jpg" alt="">

            </div>
        </div>

        <br>
        <br>

    </div>


    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <div id="estilodiv">
                    <canvas id="myCanvas1"></canvas>
                </div>
                <h4>DONA</h4>
                <p>Con cada aporte, trabajamos juntos por el futuro de niños y jovenes, conoce nuestra comunidad y comienza tu misión</p>


            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div id="estilodiv2">
                    <canvas id="myCanvas2"></canvas>
                </div>
                <h4>COMPRA</h4>
                <p>El dinero de tus compras seran destinadas a casusas humanitarias y serás parte del cambio, y un futuro mejor.</p>


            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div id="estilodiv3">
                    <canvas id="myCanvas3"></canvas>

                </div>
                <h4>VENDE</h4>
                <p>Vende y dona a la vez, en cada venta apoyaras a las fundaciones que tu elijas y ayudarán a mejorar la vida de varias personas.</p>

            </div>

        </div>

    </div>

    <footer id="footer1">

        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>
    <script src="../js/main.js"></script>

    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
