<?php

include_once('Producto.php');
include_once("modelo/Collector.php");

class ProductoCollector extends Collector
{
  
  function showProductos() {
    $rows = self::$db->getRows("SELECT * FROM producto ");        
    $arrayProducto= array();        
    foreach ($rows as $c){
      $aux = new Producto($c{'idproducto'},$c{'description'},$c{'estado'},$c{'precio'},$c{'img'},$c{'estadoventa'},$c{'idfundacionfk'},$c{'idcategoriaproductofk'});
      array_push($arrayProducto, $aux);
    }
    return $arrayProducto;        
  }
 

  function showProducto($id) {
    $row = self::$db->getRows("SELECT * FROM producto where idproducto= ?", array("{$id}"));
    $ObjProducto= new Producto($row[0]{'idproducto'},$row[0]{'description'},$row[0]{'estado'},$row[0]{'precio'},$row[0]{'img'},$row[0]{'estadoventa'},$row[0]{'idfundacionfk'},$row[0]{'idcategoriaproductofk'});
    return $ObjProducto;        
  }


  function updateProductos($id, $description, $estado, $precio, $img, $estadoventa, $idfundacion, $idcategoriaproducto){
      $insertrow= self::$db->updateRow("UPDATE public.producto SET description = ?, estado = ?, precio = ?, img = ?,  estadoventa = ?, idfundacionfk = ?, idcategoriaproductofk = ? where idproducto = ? ", 
                  array( "{$description}", "{$estado}", "{$precio}","{$img}", "{$estadoventa}","{$idfundacion}","{$idcategoriaproducto}", $id));
  }
   
  
  function updateProductosToVendido($id){
      $vendido="vendido";
      $insertrow= self::$db->updateRow("UPDATE public.producto SET estadoventa = ? where idproducto = ? ", 
                  array($vendido, $id));
  }
    
      
  function deleteProducto($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.producto where idproducto = ?", 
                  array( $id ));
  }
   function createProducto($description, $estado, $precio, $img, $estadoventa, $idfundacion, $idcategoriaproducto){
    $insertrow= self::$db->insertRow("INSERT INTO public.producto (description, estado, precio, img, estadoventa, idfundacionfk, idcategoriaproductofk) VALUES (?,?,?,?,?,?,?)", array("{$description}", "{$estado}", "{$precio}","{$img}", "{$estadoventa}","{$idfundacion}","{$idcategoriaproducto}"));
  }  
}
?>
