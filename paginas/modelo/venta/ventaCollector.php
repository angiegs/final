<?php

include_once('venta.php');
include_once('../../modelo/Collector.php');


class ventaCollector extends Collector
{
  
  function showventas() {
    $rows = self::$db->getRows("SELECT * FROM venta ");   
    $arrayVenta= array();        
    foreach ($rows as $c){
      $aux = new venta($c{'idventa'},$c{'total'},$c{'idclientefk'},$c{'metodopagofk'},$c{'idproductofk'});
      array_push($arrayVenta, $aux);
    }
    return $arrayVenta;        
  }
  function showventasInner() {
    $rows = self::$db->getRows("select v.idventa, v.total, u.username, m.nombre, p.description from venta as v inner join cliente as c on c.idcliente=v.idclientefk inner join metodopago as m on m.idmetodopago= v.metodopagofk inner join producto as p on p.idproducto= v.idproductofk inner join usuario as u on c.idusuario=u.idusuario;");   
    $arrayVenta= array();        
    foreach ($rows as $c){
      $aux = new venta($c{'idventa'},$c{'total'},$c{'username'},$c{'nombre'},$c{'description'});
      array_push($arrayVenta, $aux);
    }
    return $arrayVenta;        
  }
    function showventa($id) {
    $row = self::$db->getRows("SELECT * FROM venta where idventa= ?", array("{$id}"));
    $ObjVenta= new venta($row[0]{'idventa'},$row[0]{'total'},$row[0]{'idclientefk'},$row[0]{'metodopagofk'},$row[0]{'idproductofk'});
    return $ObjVenta;        
  }

  function updateventa($id, $total, $idclientefk, $metodopagofk, $idproductofk){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.venta SET total= ?, idclientefk= ?, metodopagofk= ?, idproductofk= ? where idventa = ?", 
                  array( "{$total}","{$idclientefk}","{$metodopagofk}","{$idproductofk}",$id ));
  }

  function deleteventa($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.venta where idventa = ?", 
                  array( $id ));
  }

  function deleteVentaCliente($idcliente){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.venta where idclientefk = ?", 
                  array( $idcliente));
  }

  function createventa($nombre, $idclientefk, $metodopagofk, $idproductofk){
    $insertrow= self::$db->insertRow 
                  ("INSERT INTO public.venta (total, idclientefk, metodopagofk, idproductofk) VALUES (?, ?, ?, ?)", array("{$nombre}","{$idclientefk}","{$metodopagofk}","{$idproductofk}"));
  }
}
?>