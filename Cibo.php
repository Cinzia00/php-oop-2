<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto {
    protected $data_di_produzione;
    protected $data_di_scadenza;
    protected $ingredienti;

    function __construct($nome, $prezzo, $categoria, $marca,  $immagine, $_data_di_produzione, $_data_di_scadenza){
        parent::__construct($nome, $prezzo, 'cibo', $categoria, $marca,  $immagine);

        $this->data_di_produzione = $_data_di_produzione;
        $this->data_di_scadenza = $_data_di_scadenza;
    }

    public function getDataProduzione() {
        return $this->data_di_produzione;
    }

    public function getDataScadenza() {
        return $this->data_di_scadenza;
    }

    public function getIngredienti() {
        return $this->ingredienti;
    }

    public function setDataProduzione($newValue) {
        $this->data_di_produzione = $newValue;
    }

    public function setDataScadenza($newValue) {
        $this->data_di_scadenza = $newValue;
    }

    public function setIngredienti($newValue) {
        $this->ingredienti = $newValue;
    }


    public function printCardCiboHTML() {
    echo"
            <div class=\"col\">
                <div style=\"width:300px\" class=\"card\">
                    <h5 class=\"card-title\"> {$this->getMarca()} </h5>
                    <img src=\"{$this->getImmagine()}\" class=\"card-img-top\">
                    <div class=\"card-body\">
                        <p style=\"font-size:13px\" class=\"card-text\">Prezzo: {$this->getPrezzo()} euro</p>
                        <p style=\"font-size:13px\" class=\"card-text\">Data di produzione: {$this->getDataProduzione()}</p>
                        <p style=\"font-size:13px\" class=\"card-text\">Data di scadenza: {$this->getDataScadenza()}</p>
                        <p class=\"card-text\"><strong>Ingredienti:</strong> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.</p>
                    </div>
                </div>
            </div>";
  }
}