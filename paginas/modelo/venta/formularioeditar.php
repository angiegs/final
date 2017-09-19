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
        <link rel="stylesheet"  href="../../../css/estiloCatalogo.css">
        <link rel="stylesheet"  href="../../../css/estiloCarro.css">
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
                    $id= $_GET['id'];
                    echo '<h2 class="topspace text-center">Roles</h2>';
                    include_once('../../modelo/venta/ventaCollector.php');
                    $ventaCollectorObj = new ventaCollector();
                    $Objventa=$ventaCollectorObj->showventa($id);
            ?>
            <div class="container topspace">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form method="post" action="editar.php">
                            <div class="form-group">
                              <label for="idm">ID</label>
                              <input type="text" class="form-control" id="id" value="<?php echo $Objventa->getIdventa(); ?>" readonly name="id">
                            </div>
                             <label for="total">Total</label>
                              <input type="text" class="form-control" id="total" value="<?php echo $Objventa->getTotal(); ?>"  name="total">
                              <label for="cliente">ID Cliente</label>
                              <select id="cliente" name="cliente" method="post" class="form-control" required>
                                    <?php
                                        include_once("../../modelo/cliente/clienteCollector.php");
                                        include_once("../../modelo/usuario/usuarioCollector.php");
                                        $clienteCollectorObj = new clienteCollector();
                                        $usuarioCollectorObj = new usuarioCollector();
                                        
                                        foreach ($clienteCollectorObj->showClientes() as $d){
                                            foreach ($usuarioCollectorObj->showUsuarios() as $c){
                                                if($d->getIdusuario() == $c->getIdusuario()){
                                                    echo "<option value= " . $d->getIdcliente() . ">" . $c->getNombre(). "</option>";       
                                                }                                                
                                            }                                            
                                        }
                                    ?>
                                </select>
                              <label for="metodo">Metodo Pago</label>
                              <select id="metodo" name="metodo" method="post" class="form-control" required>
                                    <?php
                                        include_once("../../modelo/MetodoPago/MetodoPagoCollector.php");
                                        $metodopagoCollectorObj = new metodopagoCollector();
                                        
                                        foreach ($metodopagoCollectorObj->showMetodoPagos() as $c){
                                            echo "<option value= ".$c->getIdmetodopago(). ">". $c->getMetodo(). "</option>";
                                            
                                        }
                                    ?>
                                </select>
                              <label for="producto">ID Producto</label>
                               <select id="producto" name="producto" method="post" class="form-control" required>
                                    <?php
                                        include_once("../../modelo/producto/ProductoCollector.php");
                                        $productoCollectorObj = new ProductoCollector();
                                        
                                        foreach ($productoCollectorObj->showProductos() as $c){
                                            if($c->getEstadoventa()!="vendido"){
                                                echo "<option value= ".$c->getIdproducto(). ">". $c->getDescripcion(). "</option>";                                                
                                            }                                            
                                        }
                                    ?>
                                </select>
                              <button type="submit" class="btn btn-info">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
             <a href="view.php" class="btn btn-danger pull-right">Volver</a>
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