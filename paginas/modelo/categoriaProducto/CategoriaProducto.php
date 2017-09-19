<?php

class categoriaProducto
{
    private $idcategoriaproducto;
    private $nombre;
 
     function __construct($idcategoriaproducto,$nombre) {
       $this->idcategoriaproducto = $idcategoriaproducto;
       $this->nombre = $nombre;
      
     }
    
     function setIdcategoriaproducto($idcategoriaproducto){
       $this->idcategoriaproducto = $idcategoriaproducto;
     } 
     function getIdcategoriaproducto(){
       return $this->idcategoriaproducto;
     } 
    
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     
}

?> 
