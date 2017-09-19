<?php

include_once('Ciudad.php');
include_once('../../modelo/Collector.php');

class CiudadCollector extends Collector
{
  
  function showCiudades() {
    $rows = self::$db->getRows("SELECT * FROM ciudad ");        
    $arrayCiudad= array();        
    foreach ($rows as $c){
      $auxi = new  Ciudad($c{'idciudad'},$c{'nombre'});
      array_push($arrayCiudad, $auxi);
    }
    return $arrayCiudad;        
  }

  function showCiudad($id) {
    $row = self::$db->getRows("SELECT * FROM ciudad WHERE idciudad= ? ", array("{$id}"));        
    $ObjCiudad = new Ciudad($row[0]{'idciudad'},$row[0]{'nombre'});

    return $ObjCiudad;        
  }

  function updateCiudad($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.ciudad SET nombre= ? where idciudad = ?", 
                  array( "{$nombre}", $id ));
  }

  function deleteCiudad($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.ciudad where idciudad = ?", 
                  array( $id ));
  }
  function createCiudad($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.ciudad (nombre) VALUES (?)", array("{$nombre}"));
  }

}

?>