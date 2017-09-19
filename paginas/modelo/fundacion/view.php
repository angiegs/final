  <?php
  session_start();
 if (!isset($_SESSION['user'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
        }else{
            if(!$_SESSION['rol']==1){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
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

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/portfolio-item.css" rel="stylesheet">
    <link href="../../../css/estiloFundacionLogin.css" rel="stylesheet">
    <link rel="icon" href="../../../img/LogoSupportYou.png">
    <link href="../../../css/style.css" rel="stylesheet">
    <link rel="stylesheet"  href="../../../css/estiloadmin.css">
    <link rel="stylesheet"  href="../../../css/estiloRegistro.css">
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
                <a href="../../administrador.php"><img alt="LogoAplicacion" id="estilo_logo" src="../../../img/LogoSupportYou.png"></a>
            </div>
        </div>
    </nav>


<div id="main">

<?php

include_once("fundacionCollector.php");

$id =1;

$FundacionCollectorObj = new fundacionCollector();
echo '<h2 class="topspace text-center">Fundaciones</h2>';
echo "<a href='RegistroFundacion.php' class='btn btn-warning center-block w10'><b>+</b></a>";
    
echo '<div class="">';                     
                echo '<table class="table table-condensed">';
                    echo ' <thead><tr>';   
                        echo '<th>ID</th>';
                        echo '<th>Nombre</th>';
                        echo '<th>Categoría</th>';
                        echo '<th>Actividad</th>';
                        echo '<th>Direccion</th>';
                        echo '<th>Email</th>';
                        echo '<th>Contraseña</th>';
                        echo '<th>Ruc</th>';
                        echo '<th>País</th>';
                        echo '<th>Ciudad</th>';
                        echo '<th>Telefono</th>';
                        echo '<th>Cuenta</th>';
                        echo '<th>Logo</th>';
                    echo '</tr> </thead><tbody>';

foreach ($FundacionCollectorObj->showFundacionesInner() as $c){
   echo '<tr>'; 
                echo '<td>' . $c->getIdFundacion() . '</td>';
                echo '<td>' . $c->getNombre() . '</td>';
                echo '<td>' . $c->getCategoria() . '</td>';
                echo '<td>' . $c->getActividad() . '</td>';
                echo '<td>' . $c->getDireccion() . '</td>';
                echo '<td>' . $c->getEmail() . '</td>';
                echo '<td>' . $c->getPass() . '</td>';
                echo '<td>' . $c->getRuc() . '</td>';
                echo '<td>' . $c->getIdpaisfk() . '</td>'; 
                echo '<td>' . $c->getIdciudadfk() . '</td>';
                echo '<td>' . $c->getTelefono() . '</td>';
                echo '<td>' . $c->getIdcuentafk() . '</td>';
                echo "<td><img class='img-responsive' id='imagen' src='../../../img/fundaciones/".$c->getFoto()."' alt=''></td> \n";  

  echo "<td> <a href='editarFundacion.php?id=".$c->getIdFundacion()."' class='btn btn-info mg'>  Editar</a>";
  echo ' ';
  echo "<a href='eliminarFundacion.php?id=".$c->getIdFundacion() . "' class='btn btn-info'>Eliminar</a></td>";
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