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
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Administración</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Comentarios</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/portfolio-item.css" rel="stylesheet">
    <link href="../../../css/estiloFundacionLogin.css" rel="stylesheet">
    <link rel="icon" href="../../../img/LogoSupportYou.png">
    <link href="../../../css/style.css" rel="stylesheet">
    <link rel="stylesheet"  href="../../../css/estiloadmin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <script src="../../../js/main.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Menu -->
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

<div id="main">

<br> <br> <br><br> <br> <br>
<br> 

<?php

include_once("ComentarioCollector.php");

$id;

$ComentarioCollectorObj = new ComentarioCollector();
echo '<h2 class="topspace text-center">Comentarios</h2>';
echo "<a href='FormularioNuevoComentario.php' class='btn btn-warning center-block w10'><b>+</b></a>";
echo '<div class="">';                     
                echo '<table class="table table-condensed">';
                    echo ' <thead><tr>';   
                        echo '<th>ID</th>';
                        echo '<th>Descripcion</th>';
                        echo '<th>Email</th>';
                    echo '</tr> </thead><tbody>';

foreach ($ComentarioCollectorObj->showComentarios() as $c){
   echo '<tr>'; 
                echo '<td>' . $c->getIdComentarios() . '</td>';
                echo '<td>' . $c->getDescripcion() . '</td>';
                echo '<td>' . $c->getEmail() . '</td>';
                
  echo "<td> <a href='Editarcomentario.php?id=".$c->getIdComentarios()."' class='btn btn-info mg'>  Editar</a>";
  echo ' ';
  echo "<a href='Eliminarcomentario.php?id=".$c->getIdComentarios() . "' class='btn btn-info'> Eliminar. </a></td>";
echo '</tr>'; 
                      }
                     echo '</tbody><table>';
                 echo '</div>';
?>

</div>

</body>
</html>
<?php
}
        }
?>