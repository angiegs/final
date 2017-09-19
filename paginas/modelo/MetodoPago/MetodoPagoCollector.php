<?php

include_once('MetodoPago.php');
include_once("../../modelo/Collector.php");

class metodopagoCollector extends Collector
{
  
  function showMetodoPagos() {
    $rows = self::$db->getRows("SELECT * FROM metodopago "); 
    $arrayMetodoPago= array();        
    foreach ($rows as $c){
      $aux = new MetodoPago($c{'idmetodopago'},$c{'nombre'});
      array_push($arrayMetodoPago, $aux);
    }
    return $arrayMetodoPago;        
  }
  function showMetodoPago($id) {
    $row = self::$db->getRows("SELECT * FROM metodopago where idmetodopago= ?", array("{$id}"));
    $ObjDemo= new MetodoPago($row[0]{'idmetodopago'},$row[0]{'nombre'});
    return $ObjDemo;        
  }

  function updateMetodoPago($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.metodopago SET nombre= ? where idmetodopago = ?", 
                  array( "{$nombre}",$id ));
  }

  function deleteMetodoPago($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.metodopago where idmetodopago = ?", 
                  array( $id ));
  }
  function createMetodoPago($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.metodopago (nombre) VALUES (?)", array("{$nombre}"));
  }
}
?>
