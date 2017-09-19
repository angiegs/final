<?php

include_once('CategoriaProducto.php');
include_once("../../modelo/Collector.php");


class categoriaproductoCollector extends Collector
{
  function showCategoriaProductos() {
    $rows = self::$db->getRows("SELECT * FROM categoriaproducto "); 
    $arrayCategoriaProducto= array();        
    foreach ($rows as $c){
      $aux = new CategoriaProducto($c{'idcategoriaproducto'},$c{'nombre'});
      array_push($arrayCategoriaProducto, $aux);
    }
    return $arrayCategoriaProducto;        
  }
  function showCategoriaProducto($id) {
    $row = self::$db->getRows("SELECT * FROM categoriaproducto where idcategoriaproducto= ?", array("{$id}"));
    $ObjCategoriaProducto= new CategoriaProducto($row[0]{'idcategoriaproducto'},$row[0]{'nombre'});
    return $ObjCategoriaProducto;        
  }

 
  function updateCategoriaProducto($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.categoriaproducto SET  nombre= ? where idcategoriaproducto = ?", 
                  array( "{$nombre}",$id ));
  }

  function deleteCategoriaProducto($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.categoriaproducto where idcategoriaproducto = ?", 
                  array( $id ));
  }
  function createCategoriaProducto($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.categoriaproducto (nombre) VALUES (?)", array("{$nombre}"));
  }    
}
?>