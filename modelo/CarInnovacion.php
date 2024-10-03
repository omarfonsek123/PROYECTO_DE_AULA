<?php

class CarInnovacion{
    private $id;
    private $nombre;
    private $descripcion;
    private $fechaCreacion;
    private $estado;

    public function __contruct($id, $nombre, $descripcion, $fechaCreacion, $estado){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->fechaCreacoon = $fechaCreacion;
        $this->estado = $estado;
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

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(){
       return $this->descripcion;
    }

    public function setFechaCreacion($fechaCreacion){
        $this->fechaCreacion = $fechaCreacion;
    }

    public function getFechaCreacion(){
       return $this->fechaCreacion;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getEstado(){
       return $this->estado;
    }
    
}