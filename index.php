<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Gioco.php";
require_once __DIR__ . "/Cuccia.php";

$prodotto1 = new Cibo('croccantini', 10.00, Prodotto::$listaCategorie[0], 'Monge', "./img/monge-croccantini.webp", '20.01.2021', '15.02.2024');
$prodotto2 = new Gioco('osso sintetico', 20, Prodotto::$listaCategorie[1], 'Sole', "./img/gioco1-cane.webp", 'plastica', 'rosso');
$prodotto3 = new Cuccia('cuccia', 50, Prodotto::$listaCategorie[1], 'Royal', './img/cuccia1-cane.jpg', 'legno');
$prodotto4 = new Cibo('carne in scatola', 5.00, Prodotto::$listaCategorie[0], 'Pedigree', "./img/cibo_in_scatola.jpg", '02.03.2023', '15.02.2024');
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
</head>
<body>
    <div class="container py-4">
        <h1 class="text-center">Shop online</h1>
        <div class="row row-cols-1 py-5 row-cols-md-2 g-4">
            <?php
            echo $prodotto1->printCardCiboHTML();
            echo $prodotto4->printCardCiboHTML();
            echo $prodotto2->printCardGiocoHTML();
            echo $prodotto3->printCardCucciaHTML();
            ?>
        </div>
    </div>
</body>
</html>