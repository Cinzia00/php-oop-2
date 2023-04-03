<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Gioco.php";
require_once __DIR__ . "/Cuccia.php";

$prodotto1 = new Cibo('croccantini', 10.00, Prodotto::$listaCategorie[0], 'Monge', "./img/monge-croccantini.webp", '20.01.2021', '15.02.2024');
$prodotto2 = new Gioco('ciabatta', 20, Prodotto::$listaCategorie[0], 'Sole', "./img/gioco1-cane.webp", 'plastica', 'rosso');
$prodotto3 = new Cuccia('cuccia', 50, Prodotto::$listaCategorie[1], 'Royal', './img/cuccia1-cane.jpg', 'legno', 'cuccia');
$prodotto4 = new Cibo('carne in scatola', 5.00, Prodotto::$listaCategorie[0], 'Pedigree', "./img/cibo_in_scatola.jpg", '02.03.2023', '15.02.2024');
$prodotto5 = new Cibo('salamotto', 8, Prodotto::$listaCategorie[0], 'NaturalPet', "./img/salamotto.jpg", '03.11.2022', '21.12.2025');
$prodotto6 = new Gioco('orsetto peluche', 25, Prodotto::$listaCategorie[0], 'Teneroni', "./img/gioco2-cane.jpg", 'tessuto', 'marrone');
$prodotto7 = new Gioco('Giostrina', 30, Prodotto::$listaCategorie[1], 'Felixs', "./img/gioco1-gatti.jpg", 'tessuto', 'grigio');
$prodotto8 = new Gioco('affila-unghie', 30, Prodotto::$listaCategorie[1], 'Trex', "./img/gioco2-gatti.jpg", 'tessuto e canapa', 'marrone');
$prodotto9 = new Cuccia('cuccia', 80, Prodotto::$listaCategorie[1], 'Premium', './img/cuccia1-gatto.jpg', 'paglia-canapa', 'cuccia/cesto');
$prodotto10 = new Cuccia('cuccia', 45, Prodotto::$listaCategorie[1], 'Premium', './img/cuccia2-gatto.jpg', 'tessuto', 'materasso');
$prodotto11 = new Cuccia('cuccia', 45, Prodotto::$listaCategorie[1], 'Excellent', './img/cuccia3-gatto.jpg', 'tessuto', 'materasso');
$prodotto12 = new Cuccia('cuccia', 50, Prodotto::$listaCategorie[0], 'Paradise', './img/cuccia2-cane.webp', 'tessuto', 'multimateriale');
$prodotto13 = new Cuccia('cuccia', 28, Prodotto::$listaCategorie[0], 'Tops', './img/cuccia3-cane.jpg', 'tessuto', 'materasso');
$prodotto14 = new Cibo('croccantini', 11.50, Prodotto::$listaCategorie[1], 'Ultima', "./img/gatto-croccantini.jpg", '03.06.2022', '31.12.2026');
$prodotto15 = new Cibo('carne in scatola', 12.50, Prodotto::$listaCategorie[1], 'Whiskas', "./img/cibo1-gatto.jpg", '16.01.2021', '22.05.2025');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">0
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container py-4">
        <h1 class="text-center shop-title">Shop online</h1>
        <div class="row row-cols-1 py-5 row-cols-md-2 g-4">
            <?php
            echo $prodotto1->printCardCiboHTML();
            echo $prodotto4->printCardCiboHTML();
            echo $prodotto9->printCardCucciaHTML();
            echo $prodotto3->printCardCucciaHTML();
            echo $prodotto6->printCardGiocoHTML();
            echo $prodotto8->printCardGiocoHTML();
            echo $prodotto5->printCardCiboHTML();
            echo $prodotto10->printCardCucciaHTML();
            echo $prodotto7->printCardGiocoHTML();
            echo $prodotto2->printCardGiocoHTML();
            echo $prodotto11->printCardCucciaHTML();
            echo $prodotto12->printCardCucciaHTML();
            echo $prodotto13->printCardCucciaHTML();
            echo $prodotto14->printCardCiboHTML();
            echo $prodotto15->printCardCiboHTML();

            ?>
        </div>
    </div>
</body>
</html>