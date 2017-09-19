<?php

include_once('administrador.php');
include_once("../../modelo/Collector.php");


class administradorCollector extends Collector
{
  function showAdministradores() {
    $rows = self::$db->getRows("SELECT * FROM administrador "); 
    $arrayAdministrador= array();        
    foreach ($rows as $c){
      $aux = new Administrador($c{'idadministrador'},$c{'cargo'},$c{'idusuario'});
      array_push($arrayAdministrador, $aux);
    }
    return $arrayAdministrador;        
  }

  function showAdministrador($id) {
    $row = self::$db->getRows("SELECT * FROM administrador where idadministrador= ?", array("{$id}"));
    $ObjAdministrador= new Administrador($row[0]{'idadministrador'},$row[0]{'cargo'},$row[0]{'idusuario'});
    return $ObjAdministrador;        
  }
    
function showAdministradorUsuario($id,$idadministrador) {
    $row = self::$db->getRows("SELECT * FROM administrador where idadministrador= ? and idusuario=?", array("{$idadministrador}","{$id}" ));
    $ObjAdministrador= new Administrador($row[0]{'idadministrador'},$row[0]{'cargo'},$row[0]{'idusuario'});
    return $ObjAdministrador;        
  }    


  function updateAdministrador($id, $cargo, $idusuario){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.administrador SET cargo= ? where idadministrador = ?", 
                  array( "{$cargo}",$id ));
  }

  function deleteAdministrador($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.administrador where idadministrador = ?", 
                  array( $id ));
  }
  function createAdministrador($idusuario, $cargo){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.administrador (cargo,idusuario) VALUES (?,?)", array("{$cargo}","{$idusuario}"));
  }    
}
?>