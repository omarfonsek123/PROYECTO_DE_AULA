<?php

class AspectoNormativo{
    private $id;
    private $tipo;
    private $descripcion;
    private $fuente;

    public function __contruct($id, $tipo, $descripcion, $fuente){
        $this->id = $id;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->fuente = $fuente;
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

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(){
       return $this->descripcion;
    }

    public function setFuente($fuente){
        $this->fuente = $fuente;
    }

    public function getFuente(){
       return $this->fuente;
    }
