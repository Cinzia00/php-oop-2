<?php

class Cucce {
    protected $marca;
    protected $materiale;
    protected $tipo;


    function __construct($materiale){
        $this->materiale = $materiale;
    }
}