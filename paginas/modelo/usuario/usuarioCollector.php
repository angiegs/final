<?php

include_once('Usuario.php');
include_once("../../modelo/Collector.php");


class usuarioCollector extends Collector
{
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario "); 
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'email'},$c{'nombre'},$c{'username'},$c{'password'},$c{'idrol'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ?", array("{$id}"));
    $ObjDemo= new Usuario($row[0]{'idusuario'},$row[0]{'email'},$row[0]{'nombre'},$row[0]{'username'},$row[0]{'password'},$row[0]{'idrol'});
    return $ObjDemo;        
  }

  function ultimoUsuario() {
    $row = self::$db->getRows("SELECT * FROM public.usuario ORDER BY idusuario DESC LIMIT 1");
    $ObjDemo= new Usuario($row[0]{'idusuario'},$row[0]{'email'},$row[0]{'nombre'},$row[0]{'username'},$row[0]{'password'},$row[0]{'idrol'});
    return $ObjDemo;        
  }


  function updateUsuario($id, $email, $nombre, $username, $pass,$idrol){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.usuario SET email= ?, nombre= ?, username= ?, password= ?, idrol= ? where idusuario = ?", 
                  array( "{$email}","{$nombre}","{$username}","{$pass}","{$idrol}",$id ));
  }

  function deleteUsuario($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.usuario where idusuario = ?", 
                  array( $id ));
  }
  function createUsuario($email, $nombre, $username, $pass, $idrol){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.usuario (email,nombre, username, password, idrol) VALUES (?,?,?,?,?)", array("{$email}","{$nombre}","{$username}","{$pass}","{$idrol}"));
  }    
}
?>