<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Subir un Objeto </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="../css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    <link href="../css/estiloobjeto.css" rel="stylesheet" type='text/css'>
    <link href="../css/style.css" rel="stylesheet">


    <link href="../css/portfolio-item.css" rel="stylesheet" type='text/css'>
    <link rel="icon" href="../img/LogoSupportYou.png" type='text/css'>
    <link href="../css/stylecentral.css" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" type='text/css'>



</head>

<body>

    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a href="../index.html"><img alt="LogoAplicacion" id="estilo_logo" src="../img/LogoSupportYou.png"></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <br>
                <ul class="nav navbar-nav navbar-right">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="MiPerfil.php">MI PERFIL</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contactos.php">CONTÁCTENOS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="catalogo.php">CATÁLOGO</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php">SALIR</a>

                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
 


    <div id="formulario">
        <form>
            <div class="form-group">

                <label >Seleccionar Elemento</label>
                <select name=categoriaProducto class="form-control" >
                    <option>Ropa</option>
                    <option>Zapatos</option>
                    <option>Accesorios</option>
                    <option>Tecnologia</option>
                    <option>Otros</option>
                </select>
            </div>

            <div class="form-group">

                <label >Seleccionar Fundacion</label>
                <select class="form-control" >
                    <option>Unicef</option>
                    <option>Pintando Sonrisas</option>
                    <option>Medicos Sin Fronteras</option>
                    <option>Cuerpos de Paz</option>
                    <option>Cura a la violencia</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleTextarea">Describir objeto</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label >Uso del objeto</label>
                <select class="form-control">
                    <option>Nuevo</option>
                    <option>Semi nuevo, poco uso</option>
                    <option>Usado, en buen estado</option>

                </select>
            </div>

             <div class="form-group">
                <label for="exampleTextarea">Precio</label>
                <textarea class="form-control" id="exampleTextarea" rows="1">$</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Subir Foto </label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted"></small>
            </div>
            <input id="btn_mensaje"  type="submit" value="Todo Listo!" class="btn btn-primary" onclick = "location='MiPerfil.php'"/>
        </form>

    </div>

    <footer>Copyright 2017 SupportYou Todos los derechos reservados</footer>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>



</html>
