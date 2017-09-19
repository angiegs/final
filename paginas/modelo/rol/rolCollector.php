<?php

include_once('rol.php');
include_once("../../modelo/Collector.php");


class rolCollector extends Collector
{
  
  function showroles() {
    $rows = self::$db->getRows("SELECT * FROM rol ");   
    $arrayRol= array();        
    foreach ($rows as $c){
      $aux = new rol($c{'idrol'},$c{'nombre'});
      array_push($arrayRol, $aux);
    }
    return $arrayRol;        
  }
    function showRol($id) {
    $row = self::$db->getRows("SELECT * FROM rol where idrol= ?", array("{$id}"));
    $ObjRol= new rol($row[0]{'idrol'},$row[0]{'nombre'});
    return $ObjRol;        
  }

  function updateRol($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.rol SET nombre= ? where idrol = ?", 
                  array( "{$nombre}",$id ));
  }

  function deleteRol($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.rol where idrol = ?", 
                  array( $id ));
  }
  function createRol($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.rol (nombre) VALUES (?)", array("{$nombre}"));
  }
}
?>