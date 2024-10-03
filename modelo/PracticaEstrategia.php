<?php

class PracticaEstrategia{
    private $id;
    private $tipo;
    private $nombre;
    private $descripcion;

    public function __contruct($id, $tipo, $nombre, $descripcion){
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;

    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
       return $this->id;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
       return $this->tipo;
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
