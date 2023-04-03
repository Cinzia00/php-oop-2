<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/materialeTipo.php";



class Cuccia extends Prodotto {
    use materialeTipo;
    // protected $materiale;
    protected $tipo;

    function __construct($nome, $prezzo, $categoria, $marca, $immagine, $_materiale){
        parent::__construct($nome, $prezzo, 'cuccia', $categoria, $marca, $immagine);

        // $this->materiale = $_materiale;
    }

    // public function getMateriale() {
    //     return $this->materiale;
    // }

    // public function getTipo() {
    //     return $this->tipo;
    // }

    // public function setMateriale($new_value) {
    //     $this->materiale = $new_value;
    // }

    // public function setTipo($new_value) {
    //     $this->tipo = $new_value;
    // }

    
    public function printCardCucciaHTML() {
            echo"
            <div class=\"col\">
                <div style=\"width:300px\" class=\"card\">
                    <h5 class=\"card-title\"> {$this->getMarca()} </h5>
                    <img src=\"{$this->getImmagine()}\" class=\"card-img-top\">
                    <div class=\"card-body\">
                        <p style=\"font-size:13px\" class=\"card-text\">Prezzo: {$this->getPrezzo()} euro</p>
                        <p class=\"card-text\"><strong>Descrizione:</strong> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.</p>
                    </div>
                </div>
            </div>";
    }
}