<?php

include_once('comentario.php');
include_once('../../modelo/Collector.php');

class ComentarioCollector extends Collector
{
  
  function showComentarios() {
    $rows = self::$db->getRows("SELECT * FROM comentarios ");        
    $arrayComentario= array();        
    foreach ($rows as $c){
      $auxi = new  comentarios($c{'idcomentarios'},$c{'descripcion'},$c{'email'});
      array_push($arrayComentario, $auxi);
    }
    return $arrayComentario;        
  }

  function showComentario($id) {
    $row = self::$db->getRows("SELECT * FROM comentarios WHERE idcomentarios= ? ", array("{$id}"));        
    $ObjComentarios = new comentarios($row[0]{'idcomentarios'},$row[0]{'descripcion'},$row[0]{'email'});

    return $ObjComentarios;        
  }

  function updateComentario($id, $descripcion, $email){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.comentarios SET descripcion = ? , email =? where idcomentarios = ?", 
                  array( "{$descripcion}","{$email}", $id ));
  }

  function deleteComentario($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.comentarios where idcomentarios = ?", 
                  array( $id ));
  }
  function createComentario($descripcion, $email){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.comentarios (descripcion, email) VALUES (?,?)", array("{$descripcion}", "{$email}"));
  }

}

?>