<?php

class Prodotto {
    protected $nome;
    protected $prezzo;
    protected $tipo;


    function __construct($_nome, $_prezzo, $_tipo){
        $this->nome = $_nome;
        $this->prezzo = $prezzo;
        $this->tipo = $tipo;
    }
}