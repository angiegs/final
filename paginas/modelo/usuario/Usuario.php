<?php

class Usuario
{
    private $idusuario;
    private $email;
    private $nombre;
    private $username;
    private $pass;
    private $idrol;
    
     function __construct($idusuario, $email,$nombre,$username,$pass,$idrol) {
       $this->idusuario = $idusuario;
       $this->email = $email;
       $this->nombre = $nombre;
       $this->username = $username;
       $this->pass = $pass;
       $this->idrol=$idrol;
     }
    
     function setIdusuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdusuario(){
       return $this->idusuario;
     } 
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setUsername($username){
       $this->username = $username;
     } 
     function getUsername(){
       return $this->username;
     }
     function setPass($pass){
       $this->pass = $pass;
     } 
     function getPass(){
       return $this->pass;
     }
     function setIdrol($idrol){
       $this->idrol = $idrol;
     } 
     function getIdrol(){
       return $this->idrol;
     }
}

?> 
