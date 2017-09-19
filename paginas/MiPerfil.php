<?php
  session_start();
  if (!isset($_SESSION['user'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
        }else{
            if(!$_SESSION['rol']==1){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
            }else{
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    <link href="../css/estiloPerfil.css" rel='stylesheet' type='text/css'>
    <link rel="icon" href="../img/LogoSupportYou.png">
</head>

<body>
   
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                 <?php
                echo"<img alt='LogoAplicacion' id='estilologo' src='../img/LogoSupportYou.png'></a>"
                
                  ?>
               
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <br>
                <ul class="nav navbar-nav navbar-right">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <li>
                        <a class="page-scroll" href="catalogo.php">CATÁLOGO</a>
                    </li>              
                    <li>
                        <?php
                        echo"<a class='page-scroll' href='logout.php'>SALIR</a>"
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div class="row">

        <div class="col-md-12 col-xs-12" id="datosUsuario">

            <div id="image-preview">
                <label for="image-upload" id="image-label">Cambiar foto</label>
                <input type="file" name="image" id="image-upload" />
            </div>
            <div id="nombreUsuario">
                
                <h4><?php
                    echo "Hola " .$_SESSION['user']
                    ?></h4>
                
                <button id="botonSubirObjeto" type="submit" onClick="location.href='../paginas/subir_objeto.php?>'">Subir Objeto</button>

            </div>

        </div>





        <div id="containerImg">
            <div class="col-md-4 col-xs-6">
                <div class="imagenes">
                    <img class="foto" src="../img/ropa.jpg" alt="ropa">
                </div>
                <div class="texto">
                    <h5>Categoría</h5>
                    <h5>Descripción</h5>
                </div>
                <div class="opciones">
                    <div class="izquierda">
                        <h5><a href="../paginas/subir_objeto.html">Modificar</a></h5>
                    </div>

                    <div class="der">
                        <h5><a href="#"> Eliminar </a></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="imagenes">
                    <img class="foto" src="../img/cuna.jpg" alt="cuna">
                </div>
                <div class="texto">
                    <h5>Categoría</h5>
                    <h5>Descripción</h5>
                </div>
                <div class="opciones">
                    <div class="izquierda">
                        <h5><a href="../paginas/subir_objeto.html">Modificar</a></h5>
                    </div>

                    <div class="der">
                        <h5><a href="#"> Eliminar </a></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="imagenes">
                    <img class="foto" src="../img/oso.jpg" alt="oso">
                </div>
                <div class="texto">
                    <h5>Categoría</h5>
                    <h5>Descripción</h5>
                </div>
                <div class="opciones">
                    <div class="izquierda">
                        <h5><a href="../paginas/subir_objeto.html">Modificar</a></h5>
                    </div>

                    <div class="der">
                        <h5><a href="#"> Eliminar </a></h5>
                    </div>
                </div>
            </div>


            <br>
            <br>


        </div>

    </div>

    <footer>Copyright 2017 SupportYou Todos los derechos reservados</footer>

    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/perfil.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/uploadPreview.min.js"></script>

</body>

</html>
<?php

}
        }
?>
