<?php

trait materialeTipo {
    protected $materiale;
    protected $tipo;
}
function getMateriale(){
    return $this->materiale;
}
function setMateriale($value){
    $this->materiale = $value;
}
function getTipo(){
    return $this->tipo;
}
function setTipo($value){
    $this->tipo = $value;
}
