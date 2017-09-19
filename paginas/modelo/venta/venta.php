<?php

class venta
{
    private $idventa;
    private $total;
    private $idclientefk;
    private $metodopagofk;
    private $idproductofk;
    
     function __construct($idventa,$total,$idclientefk,$metodopagofk,$idproductofk) {
       $this->idventa = $idventa;
       $this->total = $total;
       $this->idclientefk = $idclientefk;
       $this->metodopagofk = $metodopagofk;
       $this->idproductofk = $idproductofk;
     }
    
     function setIdventa($idventa){
       $this->idventa = $idventa;
     } 
     function getIdventa(){
       return $this->idventa;
     } 
    
     function setTotal($total){
       $this->total = $total;
     } 
     function getTotal(){
       return $this->total;
     } 
    
     function setIdclientefk($idclientefk){
       $this->idclientefk = $idclientefk;
     } 
     function getIdclientefk(){
       return $this->idclientefk;
     } 
    
     function setMetodopagofk($metodopagofk){
       $this->metodopagofk = $metodopagofk;
     } 
     function getMetodopagofk(){
       return $this->metodopagofk;
     } 
    
     function setIdproductofk($idproductofk){
       $this->idproductofk = $idproductofk;
     } 
     function getIdproductofk(){
       return $this->idproductofk;
     }
}

?> 
