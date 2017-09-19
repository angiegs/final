<?php

include_once('banco.php');
include_once("../../modelo/Collector.php");


class bancoCollector extends Collector
{
  
  function showBancos() {
    $rows = self::$db->getRows("SELECT * FROM banco ");   
    $arrayBanco= array();        
    foreach ($rows as $c){
      $aux = new banco($c{'idbanco'},$c{'nombre'});
      array_push($arrayBanco, $aux);
    }
    return $arrayBanco;        
  }
    function showBanco($id) {
    $row = self::$db->getRows("SELECT * FROM banco where idbanco= ?", array("{$id}"));
    $ObjBanco= new banco($row[0]{'idbanco'},$row[0]{'nombre'});
    return $ObjBanco;        
  }

  function updateBanco($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.banco SET nombre= ? where idbanco = ?", 
                  array( "{$nombre}",$id ));
  }

  function deleteBanco($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.banco where idbanco = ?", 
                  array( $id ));
  }
  function createBanco($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.banco (nombre) VALUES (?)", array("{$nombre}"));
  }
}
?>