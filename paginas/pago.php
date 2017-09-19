<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Pago</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/LogoSupportYou.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estiloCatalogo.css">
    <link rel="stylesheet" href="../css/estiloCarro.css">
    <link rel="stylesheet" href="../css/estiloPago.css">
</head>

<body>
    <main>
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a href="../paginas/MiPerfil.html"><img id="estilo_logo" alt="logo" src="../img/LogoSupportYou.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <br>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="MiPerfil.html">MI PERFIL</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="catalogo.html">CATALOGO</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="carrito.html">CARRITO</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../paginas/ContactoPerfil.html">CONTÁCTENOS</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../index.html">SALIR</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div id="magenta">
            <h2>Pago</h2>
        </div>
        <?php 
                    $id= $_GET['id'];
                    include_once('modelo/venta/vtacoll.php');
                    $ventaCollectorObj = new ventaCollector();
                    $Objventa=$ventaCollectorObj->showventa($id);
            ?>
        <div class="container">

            <!-- Introduction Row -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"></h2>
                </div>
                <div class="col-lg-6 col-sm-6 text-center">
                    <a href="#" onclick="seleccion()"><img class="img-circle img-responsive img-center" src="../img/paypal.png" alt="Paypal"></a>
                    <br>
                </div>
                <div class="col-lg-6 col-sm-6 text-center">
                    <a href="#" onclick="seleccion2()"><img class="img-circle img-responsive img-center" src="../img/cc.png" alt="Credit cards"></a>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <table class="table2">
                <tr>
                    <td>
                        <p id="eleccion"></p>
                    </td>
                </tr>
                <tr>
                <?php
                include_once("modelo/producto/procll.php");
                $total=20;    
                $ProductoCollectorObj = new ProductoCollector();
                $ObjProducto=$ProductoCollectorObj->showProductos();
                            foreach ($ProductoCollectorObj->showProductos() as $c){
                                if($c->getIdproducto()==$id){
                                    echo '<td class="bt">
                                        <p class="center"><span class="tt">Subtotal </span>: ' . $c->getPrecio() . '</p>
                                    </td>';
                                    $total+=$c->getPrecio();
                                }                              
                      }
                    function pagof(){
                        include_once("modelo/venta/vtacoll.php"); 
                        $ventaCollectorObj = new ventaCollector();
                        $ventaCollectorObj->createventa($total, 1, 1, $id);
                    }
                    
        ?>                    
                </tr>
                <tr>
                    <td class="bt">
                        <p class="center"><span class="tt">Envió</span>: 20</p>
                    </td>

                </tr>
                <tr>
                    <td class="bt">
                        <p class="center"><span class="tt">Total</span>: <?php echo '<p>' . $total . '</p>'?></p>
                    </td>

                </tr>
                <tr>
                    <td>
                        <a class="btn btn-default" id="ali" onclick="pagar()">PAGAR</a>
                    </td>
                </tr>
            </table>
        </div>
    </main>
    <script src="../js/jquery.js"></script>
    <script src="../js/pago.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/pago.js"></script>
    <footer id="footer1">
        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>
    </footer>
</body>

</html>
