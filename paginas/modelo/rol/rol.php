<?php

class rol
{
    private $idrol;
    private $nombre;
    
     function __construct($idrol,$nombre) {
       $this->idrol = $idrol;
       $this->nombre = $nombre;
     }
    
     function setIdrol($idrol){
       $this->idrol = $idrol;
     } 
     function getIdrol(){
       return $this->idrol;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
}

?> 
