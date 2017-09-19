<?php

include_once('cliente.php');
include_once("../../modelo/Collector.php");


class clienteCollector extends Collector
{
  function showClientes() {
    $rows = self::$db->getRows("SELECT * FROM cliente "); 
    $arrayCliente= array();        
    foreach ($rows as $c){
      $aux = new Cliente($c{'idcliente'},$c{'idusuario'},$c{'fechanacimiento'},$c{'fecharegistro'});
      array_push($arrayCliente, $aux);
    }
    return $arrayCliente;        
  }

  function showCliente($id) {
    $row = self::$db->getRows("SELECT * FROM cliente where idcliente= ?", array("{$id}"));
    $ObjDemo= new Cliente($row[0]{'idcliente'},$row[0]{'idusuario'},$row[0]{'fechanacimiento'},$row[0]{'fecharegistro'});
    return $ObjDemo;        
  }
    
function showClienteUsuario($id,$idcliente) {
    $row = self::$db->getRows("SELECT * FROM cliente where idcliente= ? and idusuario=?", array("{$idcliente}","{$id}" ));
    $ObjDemo= new Cliente($row[0]{'idcliente'},$row[0]{'idusuario'},$row[0]{'fechanacimiento'},$row[0]{'fecharegistro'});
    return $ObjDemo;        
  }    

  function updateCliente($id, $idusuario, $fechanacimiento, $fecharegistro){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.cliente SET fechanacimiento= ? where idcliente = ?", 
                  array( "{$fechanacimiento}",$id ));
  }

  function deleteCliente($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.cliente where idcliente = ?", 
                  array( $id ));
  }
  function createCliente($idusuario, $fechanacimiento, $fecharegistro){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.cliente (idusuario, fechanacimiento, fecharegistro) VALUES (?,?,?)", array("{$idusuario}","{$fechanacimiento}","{$fecharegistro}"));
  }    
}
?>