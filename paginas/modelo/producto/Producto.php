<?php

class Producto
{
    private $idproducto;
    private $idcategoriaproducto;
    private $idfundacion;
    private $descripcion;
    private $estado;
    private $precio;
    private $img;
    private $estadoventa;
    
     function __construct($idproducto, $descripcion, $estado, $precio, $img, $estadoventa, $idfundacion, $idcategoriaproducto) {
       $this->idproducto = $idproducto;
       $this->idcategoriaproducto = $idcategoriaproducto;
       $this->idfundacion = $idfundacion;
       $this->descripcion = $descripcion;
       $this->estado = $estado;
       $this->precio = $precio;
       $this->img = $img;
       $this->estadoventa = $estadoventa;    
     }
    //Idproducto
     function setIdproducto($idproducto){
       $this->idproducto = $idproducto;
     } 
     function getIdproducto(){
       return $this->idproducto;
     } 
    // icatprod
    function setIdcategoriaproducto($idcategoriaproducto){
       $this->idcategoriaproducto = $idcategoriaproducto;
     } 
     function getIdcategoriaproducto(){
       return $this->idcategoriaproducto;
     } 
    //idfun
    function setIdfundacion($idfundacion){
       $this->idfundacion = $idfundacion;
     } 
     function getIdfundacion(){
       return $this->idfundacion;
     } 
    //desc
    function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
    //est
    function setEstado($estado){
       $this->estado = $estado;
     } 
     function getEstado(){
       return $this->estado;
     } 
    //
    function setPrecio($precio){
       $this->precio = $precio;
     } 
     function getPrecio(){
       return $this->precio;
     } 
    //
    function setImg($img){
       $this->img = $img;
     } 
     function getImg(){
       return $this->img;
     } 
    //
    function setEstadoventa($estadoventa){
       $this->estadoventa = $estadoventa;
     } 
     function getEstadoventa(){
       return $this->estadoventa;
     } 
}

?> 
