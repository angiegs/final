<?php

class claseRegistroFundacion
{
    private $idfundacion;
    private $direccion;
    private $actividad;
    private $email;
    private $pass;
    private $ruc;
    private $idpaisfk;
    private $idciudadfk;
    private $idcuentafk;
    private $nombre;
    private $telefono;
    private $foto;
    private $idfundacioncategoriadfk;

    
     function __construct($idfundacion,$direccion,$actividad,$email,$pass,$ruc,$idpaisfk,$idciudadfk,$idcuentafk,$nombre,$telefono,$foto,$idfundacioncategoriadfk) {
       $this->idfundacion = $idfundacion;
       $this->direccion = $direccion;
       $this->actividad = $actividad;
       $this->email = $email;
       $this->pass = $pass;
       $this->ruc = $ruc;
       $this->idpaisfk = $idpaisfk;
       $this->idciudadfk = $idciudadfk;
       $this->idcuentafk = $idcuentafk;
       $this->nombre = $nombre;
       $this->telefono = $telefono;
       $this->foto = $foto;
       $this->idfundacioncategoriadfk = $idfundacioncategoriadfk;
     }
    
     function setIdFundacion($idfundacion){
       $this->idfundacion = $idfundacion;
     } 
     function getIdFundacion(){
       return $this->idfundacion;
     } 
     function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
     function setActividad($actividad){
       $this->actividad = $actividad;
     } 
     function getActividad(){
       return $this->actividad;
     } 
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
     function setPass($pass){
       $this->pass = $pass;
     } 
     function getPass(){
       return $this->pass;
     } 
     function setRuc($ruc){
       $this->ruc = $ruc;
     } 
     function getRuc(){
       return $this->ruc;
     } 
     function setIdpaisfk($idpaisfk){  
       $this->idpaisfk = $idpaisfk;
     } 
     function getIdpaisfk(){
       return $this->idpaisfk;
     } 
     function setIdciudadfk($idciudadfk){
       $this->idciudadfk = $idciudadfk;
     } 
     function getIdciudadfk(){
       return $this->idciudadfk;
     } 
     function setIdcuentafk($idcuentafk){
       $this->idcuentafk = $idcuentafk;
     } 
     function getIdcuentafk(){
       return $this->idcuentafk;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     }
     function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     }
     function setICategoria($idfundacioncategoriadfk){
       $this->idfundacioncategoriadfk = $idfundacioncategoriadfk;
     } 
     function getCategoria(){
       return $this->idfundacioncategoriadfk;
     } 
     
}

?> 