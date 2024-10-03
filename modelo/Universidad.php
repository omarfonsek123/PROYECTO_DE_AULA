<?php

class Universidad{
    private $id;
    private $nombre;
    private $tipo;
    private $ciudad;

    public function __contruct($id, $nombre, $tipo, $ciudad){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->ciudad = $ciudad;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
       return $this->id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
       return $this->nombre;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
       return $this->tipo;
    }

    public function setciudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function getciudad(){
       return $this->ciudad;
    }
