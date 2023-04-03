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
        $this->setNome($_nome);
        $this->setPrezzo($_prezzo);
        $this->setTipo($_tipo);
        $this->setCategoria($_categoria);
        $this->setMarca($_marca);
        $this->setImmagine($_immagine);
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
        if($value < 5) {
            throw new Exception("L'importo non puo' essere inferiore a 5 euro.");
        }
        $this->prezzo = $value;
    }
    public function setTipo($value) {
        $this->tipo = $value;
    }
    public function setCategoria($value) {
        $this->categoria = $value;
    }
    public function setImmagine($value) {
        $this->immagine = $value;
    }
    public function setMarca($value) {
        $this->marca = $value;
    }
}