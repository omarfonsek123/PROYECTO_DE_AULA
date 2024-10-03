<?php

class Aliado{
    private $nit;
    private $razonSocial;
    private $nombreContacto;
    private $correo;
    private $telefono;
    private $ciudad;

    public function __contruct($nit, $razonSocial, $nombreContacto, $correo, $telefono, $ciudad){
        $this->nit = $nit;
        $this->razonSocial = $razonSocial;
        $this->nombreContacto = $nombreContacto;
        $this->fechaCreacoon = $correo;
        $this->telefono = $telefono;
        $this->ciudad = $ciudad;
    }

    public function setNit($nit){
        $this->nit = $nit;
    }

    public function getNit(){
       return $this->nit;
    }

    public function setRazonSocial($razonSocial){
        $this->razonSocial = $razonSocial;
    }

    public function getRazonSocial(){
       return $this->razonSocial;
    }

    public function setNombreContacto($nombreContacto){
        $this->nombreContacto = $nombreContacto;
    }

    public function getNombreContacto(){
       return $this->nombreContacto;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function getCorreo(){
       return $this->correo;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function getTelefono(){
       return $this->telefono;
    }

    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function getCiudad(){
       return $this->ciudad;
    }