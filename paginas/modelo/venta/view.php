<?php
session_start();

       if (!isset($_SESSION['user'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
        }else{
            if(!$_SESSION['rol']==1){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
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
        <link href="../../../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="../../../css/style.css">  
        <link rel="stylesheet"  href="../../../css/estiloadmin.css">
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
                        <a href="index.php"><img id="estilo_logo" alt="logo" src="../../../img/LogoSupportYou.png"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <br>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                               <a class="page-scroll" href="../../administrador.php">HOME</a>
                            </li>
                            <li>
                                <?php
                                    echo"<a class='page-scroll' href='../../logout.php'>SALIR</a>"
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>    
        <?php
            include_once('../../modelo/venta/ventaCollector.php');
            $ventaCollectorObj = new ventaCollector();
                echo '<h2 class="topspace text-center">Ventas</h2>';
                echo "<a href='formularioagregar.php' class='btn btn-warning center-block w10'><b>+</b></a>";
                echo '<div class="">';                     
                echo '<table class="table table-condensed">';
                    echo ' <thead><tr>';   
                        echo '<th>ID</th>';
                        echo '<th>Total de venta</th>';
                        echo '<th>Cliente</th>';
                        echo '<th>Metodo de Pago</th>';
                        echo '<th>Producto</th>';
                        echo '<th>Acciones</th>';
                    echo '</tr> </thead><tbody>';            
                      foreach ($ventaCollectorObj->showVentasInner() as $c){
                          echo '<tr>'; 
                              echo '<td>' . $c->getIdventa() . '</td>';
                              echo '<td>' . $c->getTotal() . '</td>';
                              echo '<td>' . $c->getIdclientefk() . '</td>';
                              echo '<td>' . $c->getMetodopagofk() . '</td>';
                              echo '<td>' . $c->getIdproductofk() . '</td>';
                              echo "<td> <a href='formularioeditar.php?id=" . $c->getIdventa() . "' class='btn btn-info mg'>Editar</a>";
                              echo "<a href='eliminar.php?id=" . $c->getIdventa() . "' class='btn btn-info'>Delete</a></td>";
                          echo '</tr>'; 
                      }
                     echo '</tbody><table>';
                 echo '</div>';
            ?>
        </main>
         <script src="../../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
        <footer id="footer1">
        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>  
    </body>
</html>
<?php

}
        }
?>