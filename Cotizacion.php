<?php

class Cotizacion{
    private $nombrePersona;
    private $empresa;
    private $correo;
    private $nit;
    private $idcliente;
    private $cantmeses;
    private $cantequipos;
    private $fecha;
    private $idcotizacion;
    private $idproducto;
    private $precioproductoactual;

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
    public function getNit(){
		return $this->nit;
		}
 
    public function setNit($nit){
        $this->nit = $nit;
    }
    public function getIdCliente(){
		return $this->idcliente;
		}
 
    public function setIdCliente($idcliente){
        $this->idcliente = $idcliente;
    }
    public function getCantMeses(){
		return $this->cantmeses;
		}
 
    public function setCantMeses($cantmeses){
        $this->cantmeses = $cantmeses;
    }
    public function getCantEquipos(){
		return $this->cantequipos;
		}
 
    public function setCantEquipos($cantequipos){
        $this->cantequipos = $cantequipos;
    }
    public function getFecha(){
		return $this->fecha;
		}
 
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function getIdCotizacion(){
		return $this->idcotizacion;
		}
 
    public function setIdCotizacion($idcotizacion){
        $this->idcotizacion = $idcotizacion;
    }
    public function getIdProducto(){
		return $this->idproducto;
		}
 
    public function setIdProducto($idproducto){
        $this->idproducto = $idproducto;
    }
    public function getPrecioProductoActual(){
		return $this->precioproductoactual;
		}
 
    public function setPrecioProductoActual($precioproductoactual){
        $this->precioproductoactual = $precioproductoactual;
    }
}