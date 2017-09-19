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
	  <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a href="../index.html"><img alt="LogoAplicacion" id="estilo_logo" src="../img/LogoSupportYou.png"></a>

            </div>

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
                               <a class="page-scroll" href="../../../administrador.php">HOME</a>
                            </li>
                            <li>
                               <a class="page-scroll" href="../../logout.php">SALIR</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>  <br><br>
		<?php 			
			include_once("ProductoCollector.php");
			include_once("Producto.php");

			$ProductoCollectorObj = new ProductoCollector();
		?>	
		<h2 class="text-center">Agrega nuevo Producto</h2>
		<br>
		<br>
		<br>
		<div id="formulario">
       
            <div class="form-group">

		<form class="form-signin" method="post" action="Agregar.php">
		    <p class="text-center"><b>ID CATEGORIA PRODUCTO</b></p>
		    <input type="text" id="catpro" class="form-control center-block" name="idcategoriaproducto">

		    <p class="text-center"><b>ID FUNDACION </b></p>
		    <input type="text" id="idfun" class="form-control center-block" name="idfundacion">
		    <p class="text-center"><b>DESCRIPCION</b></p>
		    <input type="text" id="des" class="form-control center-block" name="descripcion">

		    <p class="text-center"><b>ESTADO </b></p>
		    <input type="text" id="estado" class="form-control center-block" name="estado">

		    <p class="text-center"><b> PRECIO </b></p>
		    <input type="text" id="preci" class="form-control center-block" name="precio">

		    <p class="text-center"><b>IMAGEN </b></p>
		    <input type="file" id="imagen" class="form-control center-block" name="img">

		    <p class="text-center"><b>ESTADO DE VENTA </b></p>
		    <select id="estven" name="estadoventa" method="post" class="form-control center-block" required>
                 <option value="disponible">disponible</option>
                 <option value="disponible">vendido</option>
            </select>
		    <br>
		     </div>
            <input id="btn_mensaje"  type="submit" value="Todo Listo!" class="btn btn-primary"/>
        </form>

		<div>
			<a href="index.php">Volver al inicio...</a>
		</div>
		<style type="text/css">
			input[type=text]{
				/*margin-left: 5%;*/
				width: 40%;
			}
			.btn{
				width: 10%;
			}

		</style>			
	</body>
</html>
<?php
}
        }
?>
