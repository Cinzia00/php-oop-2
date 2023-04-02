<?php

class Prodotto {
    protected $nome;
    protected $prezzo;
    protected $tipo;
    protected $categoria;
    protected $immagine;
    protected $marca;


    public static $listaCategorie = ["cane", "gatto"];



    function __construct($_nome, $_prezzo, $_tipo, $_categoria,  $_marca, $_immagine){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->tipo = $_tipo;
        $this->categoria = $_categoria;
        $this->marca = $_marca;
        $this->immagine = $_immagine;

    }

    public function getNome() {
        return $this->nome;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setNome($value) {
        $this->nome = $value;
    }

    public function setPrezzo($value) {
        $this->prezzo = $value;
    }

    public function setTipo($value) {
        $this->tipo = $value;
    }

    public function setCategoria($value) {
        $this->categoria = $value;
    }
}