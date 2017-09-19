<?php

class Ciudad
{
    private $idciudad;
    private $nombre;
    
     function __construct($idciudad, $nombre) {
       $this->idciudad = $idciudad;
       $this->nombre = $nombre;
     }
    //
     function setIdciudad($idciudad){
       $this->idciudad = $idciudad;
     } 
     function getIdCiudad(){
       return $this->idciudad;
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
