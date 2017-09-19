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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Paises</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/portfolio-item.css" rel="stylesheet">
    <link href="../../../css/estiloFundacionLogin.css" rel="stylesheet">
    <link rel="icon" href="../../../img/LogoSupportYou.png">
    <link href="../../../css/style.css" rel="stylesheet">
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
                <a href="../fundacion/PerfilFundacion.php"><img alt="LogoAplicacion" id="estilo_logo" src="../../../img/LogoSupportYou.png"></a>
            </div>
    </nav>


<div id="main">

<?php
$id=$_GET["id"];
echo "valor de id es ". $id;
include_once("CiudadCollector.php");
include_once("Ciudad.php");
$CiudadCollectorObj = new CiudadCollector();
$ObjCiudad = $CiudadCollectorObj->showCiudad($id);
?>
<br><br>
<h2>Editar Ciudad </h2>
<form action="Actualizarciudad.php" method="post">
<p>
Id: <input type="text" name="id_ciudad" value="<?php echo $ObjCiudad->getIdCiudad(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre" value="<?php echo $ObjCiudad->getNombre(); ?>" autofocus required />
</p>

<a href="view.php" class="btn btn-info mg">  Cancelar</a>
<input type="submit" value="Guardar." />

</form>


</div>
</div>
</nav>


</body>
</html>
<?php
}
        }
?>