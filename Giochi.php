<?php

class Giochi {
    protected $marca;
    protected $materiale;
    protected $colore;


    function __construct($_marca, $_materiale){
        $this->marca = $_marca;
        $this->materiale = $_materiale;
    }
}