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
        <link href="../../../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="../../../css/style.css">        
        <link rel="stylesheet"  href="../../../css/estiloCatalogo.css">
        <link rel="stylesheet"  href="../../../css/estiloCarro.css">
        <link rel="stylesheet"  href="../../../css/estiloadmin.css">
    </head>
    <body>
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

                    
                </div>
            </nav> 
        
        <br>
        <br>
        <br>
        
         <?php 
                echo '<h2 class="topspace text-center"> Fundaciones </h2>';
         

$id=$_GET["id"];
        
        

include_once("fundacionCollector.php");

$FundacionCollectorObj = new fundacionCollector();

        $ObjFundacion = $FundacionCollectorObj->showFundacion($id);
 
                 $FundacionCollectorObj->deleteFundacion($id);

            
                echo "<h3 class='topspace text-center'>La <span class='red'>" . $ObjFundacion->getNombre() . "</span> ha sido eliminada</h3>";
?>

<div>
                <a href="view.php" class="btn btn-info center-block w70"> Volver </a>
            </div>   
</body>
</html>
<?php

}
        }
?>