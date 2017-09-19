<?php

class Administrador{
	private $idadministrador;
	private $cargo;
  private $idusuario;

	function __construct($idadministrador, $cargo,$idusuario) {
       $this->idadministrador = $idadministrador;
       $this->cargo = $cargo;
       $this->idusuario=$idusuario;
     }

     function setIdadministrador($idadministrador){
       $this->idadministrador = $idadministrador;
     } 
     function getIdadministrador(){
       return $this->idadministrador;
     } 

     
     function setCargo($cargo){
       $this->cargo = $cargo;
     } 
     function getCargo(){
       return $this->cargo;
     } 

     function setIdusuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdusuario(){
       return $this->idusuario;
     } 

}