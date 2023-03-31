<?php

class Cibo {
    protected $marca;
    protected $data_di_produzione;
    protected $data_di_scadenza;
    protected $tipo;


    function __construct($_data_di_produzione, $_data_di_scadenza,){
        $this->data_di_produzione = $_data_di_produzione;
        $this->data_di_scadenza = $_data_di_scadenza;
    }
}