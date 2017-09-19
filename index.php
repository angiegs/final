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


    <link rel="icon" type="image/png" href="img/LogoSupportYou.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

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

                <?php
                echo"<a href='index.php'><img alt='LogoAplicacion' id='estilo_logo' src='img/LogoSupportYou.png'></a>"
                ?>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <br>
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <?php
                        echo"<a class='page-scroll' href='paginas/RegistroFundacion.php'>FUNDACIONES</a>"
                        ?>
                    </li>

                    <li>
                        <?php
                        echo"<a class='page-scroll' href='paginas/contactos.php'>CONTÁCTENOS</a>"
                        ?>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- Header -->

    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <br>
                        <h1>DONA</h1>
                        <h3>Regístrate para apoyar a una Fundación</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#registro" class="btn btn-default btn-lg"> <span class="network-name">REGÍSTRATE</span></a>
                            </li>
                            <li>
                                <?php
                                echo"<a href='paginas/login.php' class='btn btn-default btn-lg'> <span class='network-name'>INICIA SESION</span></a>"
                                ?>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-section-a">
        <hr>
        <div class="container">
            <br><br>
            <a id="registro"></a>
            <div class="row">

                <div class="col-md-4">
                    <br>
                    <h4>Regístrate...</h4>
                    <form class="form-signin">
                        <br>
                        <label for="inputEmail" class="sr-only">Email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                        <label class="sr-only">Nombre</label>
                        <input type="text" id="inputName" class="form-control" placeholder="Nombre" required>
                        <label for="inputUsuario" class="sr-only">Usuario</label>
                        <input type="text" id="inputUsuario" class="form-control" placeholder="Usuario" required>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>

                        <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="location.href='paginas/RegistroConfirmacion.html'">Regístrate</button>


                        <button id="boton2" class="btn btn-lg btn-primary btn-block" type="submit" onClick="location.href='paginas/login.php'">Iniciar sesion</button>

                        <br>
                        <h4 id="styleh4">Mucha gente pequeña, en lugares pequeños, haciendo cosas pequeñas, puede cambiar el mundo.</h4>
                    </form>


                </div>
                <br>
                <div class="col-md-8">

                    <!-- Slider Carousel-->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="first-slide" src="img/3.jpg" alt="First slide">

                            </div>
                            <div class="item">
                                <img class="second-slide" src="img/1.jpg" alt="Second slide">

                            </div>
                            <div class="item">
                                <img class="third-slide" src="img/4.jpg" alt="Third slide">

                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <footer id="footer1">


        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. Todos los derechos reservados</p>

    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
