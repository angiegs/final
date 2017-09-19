<?php

class Pais
{
    private $idPais;
    private $nombre;
    
     function __construct($idPais, $nombre) {
       $this->idPais = $idPais;
       $this->nombre = $nombre;
     }
    //
     function setIdPais($idPais){
       $this->idPais = $idPais;
     } 
     function getIdPais(){
       return $this->idPais;
     } 
    // 
    function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
}

?> 
