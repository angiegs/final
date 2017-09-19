<?php
session_start();

       if (!isset($_SESSION['user'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
        }else{
            if(!$_SESSION['rol']==1){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
            }else{           
?>

    <!DOCTYPE HTML>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Administración</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../../img/LogoSupportYou.png">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../css/style.css">
        <link rel="stylesheet" href="../../../css/estiloadmin.css">
    </head>

    <body>
        <main>
            <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="../../administrador.php"><img id="estilo_logo" alt="logo" src="../../../img/LogoSupportYou.png"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <br>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="page-scroll" href="../../administrador.php">HOME</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="../../logout.php">SALIR</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php 
            include_once("../../modelo/administrador/administradorCollector.php");
            $AdministradorCollectorObj = new administradorCollector();

            include_once("../../modelo/usuario/usuarioCollector.php");
            $UsuarioCollectorObj = new usuarioCollector();

                echo '<h2 class="topspace text-center">Administradores</h2>';

                echo "<a href='formularioagregar.php' class='btn btn-warning center-block w10'><b>+</b></a>";
                
                
            
                echo '<div class="">';                     
                echo '<table class="table table-condensed">';
                    echo ' <thead><tr>';

                      
                        echo '<th>Email</th>';
                        echo '<th>Nombre</th>';
                        echo '<th>Username</th>';
                        echo '<th>Contrasena</th>';

                        echo '<th>cargo</th>';
                       
                        echo '</tr> </thead><tbody>';   


                     
                      foreach ($AdministradorCollectorObj->showAdministradores() as $c){

                           echo '<tr>'; 
                         foreach ($UsuarioCollectorObj->showUsuarios() as $u) {


                          if ($u->getIdusuario() == $c->getIdusuario()) {

                              echo '<td>' . $u->getEmail() . '</td>';
                              echo '<td>' . $u->getNombre() . '</td>';
                              echo '<td>' . $u->getUsername() . '</td>';
                              echo '<td>' . $u->getPass() . '</td>';
                                 
                          }
                               
                          }
                              
                   echo '<td>' . $c->getCargo() . '</td>';
                             
                                                                 
                              echo "<td> <a href='formularioeditar.php?id=" . $c->getIdadministrador() . "' class='btn btn-info mg'>Editar</a>";
                          
                         
                              echo "<a href='eliminar.php?id=" . $c->getidusuario() . "&idadministrador=". $c->getIdadministrador() . "' class='btn btn-info'>Eliminar</a></td>";
                          echo '</tr>';
                      }
                     echo '</tbody><table>';
                 echo '</div>';
            ?>


        </main>
        <script src="../../../js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->

        <script src="../../../js/bootstrap.js"></script>
        <footer id="footer1">
            <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

        </footer>
    </body>

    </html>
    <?php

}

    }
?>
