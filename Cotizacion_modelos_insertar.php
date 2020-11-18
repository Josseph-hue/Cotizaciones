<?php

class CotizacionModelo{
    private $modelo;
    private $descripcion;
    private $puertos;
    private $poe;
    private $stack;
    private $referencia;
    private $precio;

    function __construct(){}

    public function getModelo(){
		return $this->modelo;
		}
 
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getdescripcion(){
		return $this->descripcion;
		}
 
    public function setdescripcion($descripcion){
        $this->descripcion= $descripcion;
    }
    public function getPuertos(){
		return $this->puertos;
		}
 
    public function setPuertos($puertos){
        $this->puertos = $puertos;
    }
    public function getPoe(){
		return $this->poe;
		}
 
    public function setPoe($poe){
        $this->poe = $poe;
    }
    public function getStack(){
		return $this->stack;
		}
 
    public function setStack($stack){
        $this->stack = $stack;
    }
    public function getReferencia(){
		return $this->referencia;
		}
 
    public function setReferencia($referencia){
        $this->referencia = $referencia;
    }
    public function getPrecio(){
		return $this->precio;
		}
 
    public function setPrecio($precio){
        $this->precio = $precio;
    }
}  
