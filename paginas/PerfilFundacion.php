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
    <title>Contactos</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../../../css/portfolio-item.css" rel="stylesheet">
    <link href='../../../css/estiloRegistro.css' rel='stylesheet' type='text/css'>
    <link rel="icon" href="../../../img/LogoSupportYou.png">
    <link href="../../../css/stylecentral.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <script src="../../../js/main.js" type="text/javascript"></script>
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
                <a href="../fundacion/PerfilFundacion.php"><img alt="LogoAplicacion" id="estilo_logo" src="../../../img/LogoSupportYou.png"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <br>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="../paginas/PerfilFundacion.php">PERFIL</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="../index.php">SALIR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Contact Section -->
    <section id="contact">
        <br>
        <?php
$id="10";
include_once("fundacionCollector.php");
include_once("claseRegistroFundacion.php");
$FundacionCollectorObj = new fundacionCollector();
$ObjFundacion = $FundacionCollectorObj->showFundacion($id);
?>


        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 id="titulo"> <span> <?php echo $ObjFundacion->getNombre(); ?> </span> </h2>
                    <hr>
                    <br>
                </div>
            </div>

        </div>
    </section>

    <div class="container">

        <!-- Portfolio Item Heading -->

        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="../../../img/fundaciones/<?php echo $ObjFundacion->getFoto(); ?>" alt="">
            </div>

            <div class="col-md-4">
                <h3 id="tituloFundacion">Descripción</h3>
                <p id="pFundacion"> <?php echo $ObjFundacion->getActividad(); ?> </p>
                <h3>Información</h3>
                <ul id="pFundacion1">
                    <li><?php echo $ObjFundacion->getDireccion(); ?> </li>
                    <li><?php echo $ObjFundacion->getPais_id(); ?></li>
                    <li><?php echo $ObjFundacion->getTelefono(); ?></li>
                    <li><?php echo $ObjFundacion->getEmail(); ?></li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->


        <hr>



        <div class="container">
            <div id="don">
                <br>
                <br>
                <br> <br>
                <h3 id="colorTexto"> <span>Donaciones Realizadas</span> </h3>
               
                <br>
                <br>



                <h1 id="estiloDon2">$0,00</h1>


                <br>
                <br>
                <br>
                <br>
              
            
            </div>
        </div>

    </div>
    <footer id="footer1">


        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>


    <script src="https://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
