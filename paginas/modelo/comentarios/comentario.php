<?php

class Comentarios
{
    private $idcomentarios;
    private $descripcion;
    private $email;
    
     function __construct($idcomentarios, $descripcion, $email) {
       $this->idcomentarios = $idcomentarios;
       $this->descripcion = $descripcion;
       $this->email = $email;
     }
    //
     function setIdcomentarios($idcomentarios){
       $this->idcomentarios = $idcomentarios;
     } 
     function getIdComentarios(){
       return $this->idcomentarios;
     } 
    // 
    function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
      function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 

    
}

?> 
