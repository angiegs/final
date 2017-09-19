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
                        <a href="../../administrador.php"><img id="estilo_logo" alt="logo" src="../../../img/LogoSupportYou.png"></a>
                    </div>

                   
                </div>
            </nav>    
        <?php 
                $id= $_GET['id'];
                echo '<h2 class="topspace text-center">Fundación</h2>';
                include_once ("fundacionCollector.php");
                $FundacionCollectorObj = new fundacionCollector();
                $ObjFundacion=$FundacionCollectorObj->showFundacion($id);
        ?>
         <div class="container topspace">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form method="post" action="Actualizar.php" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="idu">ID</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getIdFundacion(); ?>" readonly name="idFundacion">
                            </div>
                             <div class="form-group">
                              <label for="metodo">Nombre</label>
                              <input type="text" class="form-control" id="metodo" value="<?php echo $ObjFundacion->getNombre(); ?>" name="nombre">
                            </div>
                            <div class="form-group">
                               <label for="metodo">Categoría</label>
                                  <select id="selectbasic" name="categoria"  method="post" class="form-control" required>
                                     <?php                  
                                        include_once("../../modelo/fundacionCategoria/fundacionCategoriaCollector.php");
                                        $id =1;
                                        $fundacionCollectorObj = new fundacionCategoriaCollector();
                                        foreach ($fundacionCollectorObj->showFundacionCategorias() as $c){
                                            if($ObjFundacion->getCategoria()==$c->getIdCategoria()){
                                                echo "<option value= ".$c->getIdCategoria(). ">". $c->getNombre(). "</option>";
                                            }                                         
                                        }
                                        foreach ($fundacionCollectorObj->showFundacionCategorias() as $c){
                                            if($ObjFundacion->getCategoria()!=$c->getIdCategoria()){
                                                echo "<option value= ".$c->getIdCategoria(). ">". $c->getNombre(). "</option>";
                                            }                                         
                                        }
                                    ?>
                                  </select>      
                            </div>
                            <div class="form-group">
                              <label for="idu">Actividad</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getActividad(); ?>" name="actividad">
                            </div>
                            <div class="form-group">
                              <label for="idu">Direccion</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getDireccion(); ?>" name="direccion">
                            </div>
                            <div class="form-group">
                              <label for="idu">Email</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getEmail(); ?>" name="email">
                            </div>
                            <div class="form-group">
                              <label for="idu">Contraseña</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getPass(); ?>" name="pass">
                            </div>
                            <div class="form-group">
                              <label for="idu">Ruc</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getRuc(); ?>" name="ruc">
                            </div>
                            <div class="form-group">
                               <label for="metodo">País</label>
                                  <select id="selectbasic" name="pais"  method="post" class="form-control" required>
                                     <?php                  
                                        include_once("../../modelo/pais/paisCollector.php");
                                        $id =1;
                                        $paisCollectorObj = new paisCollector();
                                        foreach ($paisCollectorObj->showPaises() as $c){
                                            if($ObjFundacion->getIdpaisfk()==$c->getIdPais()){
                                                echo "<option value= ".$c->getIdPais(). ">". $c->getNombre(). "</option>";
                                            }                                         
                                        }
                                        foreach ($paisCollectorObj->showPaises() as $c){
                                            if($ObjFundacion->getIdpaisfk()!=$c->getIdPais()){
                                                echo "<option value= ".$c->getIdPais(). ">". $c->getNombre(). "</option>";
                                            }                                         
                                        }
                                    ?>
                                  </select>      
                            </div>
                            <div class="form-group">
                              <label for="metodo">Ciudad</label>
                                  <select id="selectbasic" name="ciudad" method="post" class="form-control" required>
                                     <?php                  
                                        include_once("../../modelo/ciudad/CiudadCollector.php");
                                        $id =1;
                                        $ciudadCollectorObj = new CiudadCollector();
                                        foreach ($ciudadCollectorObj->showCiudades() as $c){
                                            if($ObjFundacion->getIdciudadfk()==$c->getIdCiudad()){
                                                echo "<option value= ".$c->getIdCiudad(). ">". $c->getNombre(). "</option>";
                                            }                                         
                                        }
                                        foreach ($ciudadCollectorObj->showCiudades() as $c){
                                            if($ObjFundacion->getIdciudadfk()!=$c->getIdCiudad()){
                                                echo "<option value= ".$c->getIdCiudad(). ">". $c->getNombre(). "</option>";
                                            }                                         
                                        }
                                    ?>
                                  </select>  
                            </div>
                            <div class="form-group">
                              <label for="idu">Teléfono</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getTelefono(); ?>" name="telefono">
                            </div>
                            <div class="form-group">
                              <label for="metodo">Cuenta</label>
                                  <select id="selectbasic" name="cuenta" method="post" class="form-control" required>
                                     <?php                  
                                        include_once("../../modelo/cuenta/cuentaCollector.php");
                                        $id =1;
                                        $cuentaCollectorObj = new cuentaCollector();
                                        foreach ($cuentaCollectorObj->showcuentas() as $c){
                                            if($ObjFundacion->getIdcuentafk()==$c->getIdcuenta()){
                                                echo "<option value= ".$c->getIdcuenta(). ">". $c->getNrocuenta(). "</option>";
                                            }                                         
                                        }
                                        foreach ($cuentaCollectorObj->showcuentas() as $c){
                                            if($ObjFundacion->getIdcuentafk()!=$c->getIdcuenta()){
                                                echo "<option value= ".$c->getIdcuenta(). ">". $c->getNrocuenta(). "</option>";
                                            }                                         
                                        }
                                    ?>
                                  </select>
                            </div>
                            <div class="form-group">
                              <label for="idu">Logo</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getFoto(); ?>" name="foto" readonly>
                              <input type="text" style="display:none" class="form-control" id="idu" value="<?php echo $ObjFundacion->getFoto(); ?>" name="fotoOld" readonly>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">Cambiar Foto </label>
                              <input type="file" class="form-control-file" id="exampleInputFile" value="<?php echo $ObjFundacion->getFoto(); ?>"  name="foto">
                              <small id="fileHelp" class="form-text text-muted"></small>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-info center-block">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                    
                </div>
             
            </div>
             
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