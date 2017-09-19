<?php
    class MetodoPago
    {
        private $idmetodopago;
        private $metodo;

         function __construct($idmetodopago, $metodo) {
           $this->idmetodopago = $idmetodopago;
           $this->metodo = $metodo; 
         }
        //idmetodopago
         function setIdmetodopago($idmetodopago){
           $this->idmetodopago = $idmetodopago;
         } 
         function getIdmetodopago(){
           return $this->idmetodopago;
         } 
        // metodo
        function setMetodo($metodo){
           $this->metodo = $metodo;
         } 
         function getMetodo(){
           return $this->metodo;
         }
    }
?> 
