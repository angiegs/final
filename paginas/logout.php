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
        <br> <br><br> <br> <br>
        <div class="intro-message">

            <div id="logout">

                <?php
        if (isset($_SESSION['user'])){
                session_destroy();
              echo '<h2>Ha terminado la sesión </h2><p><a href="../index.php">INICIO</a></p>';
        }else{
               
              
        }
    ?>
            </div>
        </div>

    </div>



</body>

</html>