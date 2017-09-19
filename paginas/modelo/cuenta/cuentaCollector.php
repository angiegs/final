<?php

include_once('cuenta.php');
include_once("../../modelo/Collector.php");


class cuentaCollector extends Collector
{
  
  function showcuentas() {
    $rows = self::$db->getRows("SELECT * FROM cuenta ");   
    $arrayCuenta= array();        
    foreach ($rows as $c){
      $aux = new cuenta($c{'idcuenta'},$c{'nrocuenta'},$c{'idbancofk'});
      array_push($arrayCuenta, $aux);
    }
    return $arrayCuenta;        
  }
  function showcuentasInner() {
    $rows = self::$db->getRows("select c.idcuenta, c.nrocuenta, b.nombre from cuenta as c inner join banco as b on c.idbancofk=b.idbanco");   
    $arrayCuenta= array();        
    foreach ($rows as $c){
      $aux = new cuenta($c{'idcuenta'},$c{'nrocuenta'},$c{'nombre'});
      array_push($arrayCuenta, $aux);
    }
    return $arrayCuenta;        
  }    
    function showcuenta($id) {
    $row = self::$db->getRows("SELECT * FROM cuenta where idcuenta= ?", array("{$id}"));
    $Obj= new cuenta($row[0]{'idcuenta'},$row[0]{'nrocuenta'},$row[0]{'idbancofk'});
    return $Obj;        
  }

  function updatecuenta($id, $nrocuenta, $idbancofk){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.cuenta SET nrocuenta= ?, idbancofk=? where idcuenta = ?", 
                  array( "{$nrocuenta}", "{$idbancofk}", $id ));
  }

  function deletecuenta($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.cuenta where idcuenta = ?", 
                  array( $id ));
  }
  function createcuenta($nrocuenta, $idbancofk){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.cuenta (nrocuenta, idbancofk) VALUES (?, ?)", array("{$nrocuenta}", "{$idbancofk}"));
  }
}
?>