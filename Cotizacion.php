<?php

class Cotizacion{
    private $nombrePersona;
    private $empresa;
    private $correo;

    function __construct(){}

    public function getNombrePersona(){
		return $this->nombrePersona;
		}
 
    public function setNombrePersona($nombrePersona){
        $this->nombrePersona = $nombrePersona;
    }
    public function getEmpresa(){
		return $this->empresa;
		}
 
    public function setEmpresa($empresa){
        $this->empresa = $empresa;
    }
    public function getCorreo(){
		return $this->correo;
		}
 
    public function setCorreo($correo){
        $this->correo = $correo;
    }
}