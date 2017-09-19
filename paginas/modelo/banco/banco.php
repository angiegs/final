<?php

class banco
{
    private $idbanco;
    private $nombre;
    
     function __construct($idbanco,$nombre) {
       $this->idbanco = $idbanco;
       $this->nombre = $nombre;
     }
    
     function setIdbanco($idbanco){
       $this->idbanco = $idbanco;
     } 
     function getIdbanco(){
       return $this->idbanco;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
}

?> 
