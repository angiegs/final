<?php

class cuenta
{
    private $idcuenta;
    private $nrocuenta;
    private $idbancofk;
    
     function __construct($idcuenta,$nrocuenta,$idbancofk) {
       $this->idcuenta = $idcuenta;
       $this->nrocuenta = $nrocuenta;
       $this->idbancofk = $idbancofk;
     }
    
     function setIdcuenta($idcuenta){
       $this->idcuenta = $idcuenta;
     } 
     function getIdcuenta(){
       return $this->idcuenta;
     } 
    
     function setNrocuenta($nrocuenta){
       $this->nrocuenta = $nrocuenta;
     } 
     function getNrocuenta(){
       return $this->nrocuenta;
     }
    
     function setIdbancofk($idbancofk){
       $this->idbancofk = $idbancofk;
     } 
     function getIdbancofk(){
       return $this->idbancofk;
     } 
}

?> 
