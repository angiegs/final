<?php

class FundacionCategoria
{
    private $idCategoria;
    private $nombre;
    
     function __construct($idCategoria, $nombre) {
       $this->idCategoria = $idCategoria;
       $this->nombre = $nombre;
     }
    //
     function setIdCategoria($idCategoria){
       $this->idCategoria = $idCategoria;
     } 
     function getIdCategoria(){
       return $this->idCategoria;
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