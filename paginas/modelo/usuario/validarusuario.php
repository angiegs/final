<?php
include_once ("usuarioCollector.php");

session_start();


$username = $_POST['username'];
$pass = $_POST['pass'];
$UsuarioCollectorObj = new UsuarioCollector();

?>



    <!DOCTYPE html>

    <html>

    <head>
        <title>Login</title>
        <meta charset="utf-8">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">




        <link rel="icon" type="image/png" href="../../../img/LogoSupportYou.png" />

        <link href="../../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../../css/style.css" rel="stylesheet">
        <link href="../../../css/landing-page.css" rel="stylesheet">

        <!-- Custom Fonts -->


    </head>


    <body>

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
                echo"<a href='../../../index.php'><img alt='LogoAplicacion' id='estilo_logo' src='../../../img/LogoSupportYou.png'></a>"
                ?>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <br>
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <?php
                        echo"<a class='page-scroll' href='../../../paginas/RegistroFundacion.php'>FUNDACIONES</a>"
                        ?>
                        </li>

                        <li>
                            <?php
                        echo"<a class='page-scroll' href='../../../paginas/contactos.php'>CONTÁCTENOS</a>"
                        ?>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div>
            <br> <br> <br> <br> <br>
        </div>
        <?php
        foreach ($UsuarioCollectorObj->showUsuarios() as $c){
            
            if($c->getUsername() == $username && $c->getPass() == $pass){
               
                $_SESSION['user']= $username;
                $_SESSION['rol']= $c->getIdrol();
                 
                
            if($c->getIdrol() == 1){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../administrador.php'>";

            }
            if($c->getIdrol() == 2){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../MiPerfil.php'>";

            }
            }
        }
        
        if (!isset($_SESSION['user'])){
        ?>

            <h4>Usuario o contraseña incorrecta</h4>
            <a href="../../login.php"><button class="boton">Regresar</button></a>




            <?php
             
        }
        
       ?>

    </body>

    </html>

