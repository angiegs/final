<?php
include_once('claseRegistroFundacion.php');
include_once('../Collector.php');

class fundacionCollector extends Collector
{
  
  function showFundaciones() {
    $rows = self::$db->getRows("SELECT * FROM fundacion ORDER BY idfundacion ASC ");  
    $arrayFundacion= array();        
    foreach ($rows as $c){
      $aux = new claseRegistroFundacion($c{'idfundacion'}, $c{'direccion'}, $c{'actividad'}, $c{'email'}, $c{'pass'}, $c{'ruc'}, $c{'idpaisfk'}, $c{'idciudadfk'}, $c{'idcuentafk'}, $c{'nombre'}, $c{'telefono'}, $c{'foto'}, $c{'idfundacioncategoriafk'});
      array_push($arrayFundacion, $aux);
    }
    return $arrayFundacion;        
  }
   
  function showFundacionesInner() {
    $rows = self::$db->getRows("select f.idfundacion, f.direccion, f.actividad, f.email, f.pass, f.ruc, p.nombre as pais, c.nombre as ciudad, n.nrocuenta, f.nombre, f.telefono, f.foto, t.nombre as categoria from fundacion as f inner join pais as p on f.idpaisfk=p.idpais inner join ciudad as c on f.idciudadfk=c.idciudad inner join cuenta as n on f.idcuentafk=n.idcuenta inner join fundacioncategoria as t on f.idfundacioncategoriafk=t.idfundacioncategoria");   
    $arrayFundaciones= array();        
    foreach ($rows as $c){
      $aux = new claseRegistroFundacion($c{'idfundacion'}, $c{'direccion'}, $c{'actividad'}, $c{'email'}, $c{'pass'}, $c{'ruc'}, $c{'pais'}, $c{'ciudad'}, $c{'nrocuenta'}, $c{'nombre'}, $c{'telefono'}, $c{'foto'}, $c{'categoria'});
      array_push($arrayFundaciones, $aux);
    }
    return $arrayFundaciones;        
  }   
    
  function showFundacion($id) {
    $row = self::$db->getRows("SELECT * FROM fundacion WHERE idfundacion = ? ", array("{$id}"));        
    $ObjFundacion = new claseRegistroFundacion($row[0]{'idfundacion'},$row[0]{'direccion'},$row[0]{'actividad'},$row[0]{'email'},$row[0]{'pass'},$row[0]{'ruc'},$row[0]{'idpaisfk'},$row[0]{'idciudadfk'},$row[0]{'idcuentafk'},$row[0]{'nombre'},$row[0]{'telefono'},$row[0]{'foto'},$row[0]{'idfundacioncategoriafk'});

    return $ObjFundacion;        
  }
  
  function updateFundacion($id,$direccion,$actividad,$email,$pass,$ruc,$idpaisfk,$idciudadfk,$idcuentafk,$nombre,$telefono,$foto,$idfundacioncategoriafk) {
    
        if($foto!=NULL){
            
            $insertrow = self::$db->updateRow
                   ("UPDATE public.fundacion SET direccion = ?, actividad = ?, email = ?, pass = ?, ruc = ?, idpaisfk = ?, idciudadfk = ?, idcuentafk = ?, nombre = ?, telefono = ?, foto = ?, idfundacioncategoriafk = ? WHERE idfundacion = ? ",
                   array("{$direccion}","{$actividad}","{$email}","{$pass}","{$ruc}","{$idpaisfk}","{$idciudadfk}","{$idcuentafk}","{$nombre}","{$telefono}","{$foto}","{$idfundacioncategoriafk}", $id ));  
        
        }else{ 
            $insertrow = self::$db->updateRow
          ("UPDATE public.fundacion SET direccion = ?, actividad = ?, email = ?, pass = ?, ruc = ?, idpaisfk = ?, idciudadfk = ?, idcuentafk = ?, nombre = ?, telefono = ?, idfundacioncategoriafk = ? WHERE idfundacion = ? ",
                   array("{$direccion}","{$actividad}","{$email}","{$pass}","{$ruc}","{$idpaisfk}","{$idciudadfk}","{$idcuentafk}","{$nombre}","{$telefono}","{$idfundacioncategoriafk}", $id )); 
        }
      
  }
    
  function deleteFundacion($id) {
    $deletetrow = self::$db->deleteRow("DELETE FROM public.producto WHERE idfundacionfk = ? ", array( "{$id}"));
    $deletetrow = self::$db->deleteRow("DELETE FROM public.fundacion WHERE idfundacion = ? ", array( "{$id}"));   
  } 


  function createFundacion($direccion,$actividad,$email,$pass,$ruc,$idpaisfk,$idciudadfk,$idcuentafk,$nombre,$telefono,$foto,$idfundacioncategoriafk){
    $insertrow = self::$db->insertRow("INSERT INTO public.fundacion (direccion,actividad,email,pass,ruc,idpaisfk,idciudadfk,idcuentafk,nombre,telefono,foto,idfundacioncategoriafk) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)", array("{$direccion}","{$actividad}","{$email}","{$pass}","{$ruc}","{$idpaisfk}","{$idciudadfk}","{$idcuentafk}","{$nombre}","{$telefono}","{$foto}","{$idfundacioncategoriafk}"));
  }

}
?>
