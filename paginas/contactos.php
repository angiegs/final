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

    <link href="../css/portfolio-item.css" rel="stylesheet">
    <link rel="icon" href="../img/LogoSupportYou.png">
    <link href="../css/stylecentral.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <script src="../js/main.js" type="text/javascript"></script>
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
                        echo"<a href='../index.php'><img alt='LogoAplicacion' id='estilo_logo' src='../img/LogoSupportYou.png'></a>"
                  ?>
              
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


    <!-- Contact Section -->
    <section id="contact">
        <br>
        
       
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br><br>
                    <h2 id="titulo"> <span>Contáctanos</span> </h2>
                    <hr>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tu Nombre *" id="name" required data-validation-required-message="Por favor ingresa Tu Nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo Electrónico *" id="email" required data-validation-required-message="Por favor ingresa tu Correo Electrónico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Por favor ingresa tu Teléfono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Ecribe aquí tu mensaje *" id="estilo_message" required data-validation-required-message="Por favor Ecribe aquí tu mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="btn_mensaje" class="btn btn-lg btn-primary btn-block" type="submit" onClick="location.href='../paginas/login.html'">Enviar</button>
                                

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <br>
     
        
        <hr>
        <br>
        <div id="map"></div>
    </div>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNDxIUpBiI6GrRDX-HRm_k9r3AfH3eHws&callback=initMap"></script>

    <!-- /.container-->


    <br> <br> <br> <br> <br>
    <footer id="footer1">


        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>


    <script src="https://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
