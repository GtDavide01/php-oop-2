<?php
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Gioco.php";
require_once __DIR__ . "/Models/Cibo.php";
require_once __DIR__ . "/Models/Cuccia.php";

$item1 = new Prodotto("Corda", 14.99, "gg.pjg", new Categoria("Cani"));
$items = [
    new Cibo("Crocchete per cani", 15.49, "https://www.ideashoppingcenter.it/files/archivio_Files/Foto/44645_2.JPG", new Categoria("Cani"), "1 kg", "Alimenti secchi per cani", "1 kg di crocchette bilanciate per cani Wolf of Wilderness, senza cereali né glutine, ispirate all'alimentazione originaria del lupo in natura"),
    new Gioco("Gioco per gatti  corda con due palline", 8.19, "https://ss-pics.s3.eu-west-1.amazonaws.com/files/2056905/page-set-di-palline-con-coda-e-sonaglio-in-plastica.jpg?1636994304", new Categoria("gatti"), "Plastica", "Da mordere", "Gioco dai colori festosi per gatti, unisce una corda colorata in poliestere a 2 palline in TPR con punte"),
    new Cuccia("Letto Trixie Elika", 28.99, "https://shop-cdn-m.mediazs.com/bilder/letto/batumi/3/400/1_203335_geop_zooplusexclusive_katzenbett_batumi_hs_04_3.jpg", new Categoria("gatti"), "1/2 kg", "50cm circonferenza", "Letto per gatti, cuccioli e cani di piccola taglia, in morbido peluche, confortevole bordo alto di facile accesso"),
    new Cibo("Crocchete per cani", 15.49, "https://www.ideashoppingcenter.it/files/archivio_Files/Foto/44645_2.JPG", new Categoria("Cani"), "1 kg", "Alimenti secchi per cani", "1 kg di crocchette bilanciate per cani Wolf of Wilderness, senza cereali né glutine, ispirate all'alimentazione originaria del lupo in natura"),
    new Gioco("Gioco per gatti  corda con due palline", 8.19, "https://ss-pics.s3.eu-west-1.amazonaws.com/files/2056905/page-set-di-palline-con-coda-e-sonaglio-in-plastica.jpg?1636994304", new Categoria("gatti"), "Plastica", "Da mordere", "Gioco dai colori festosi per gatti, unisce una corda colorata in poliestere a 2 palline in TPR con punte"),
    new Cuccia("Letto Trixie Elika", 28.99, "https://shop-cdn-m.mediazs.com/bilder/letto/batumi/3/400/1_203335_geop_zooplusexclusive_katzenbett_batumi_hs_04_3.jpg", new Categoria("gatti"), "1/2 kg", "50cm circonferenza", "Letto per gatti, cuccioli e cani di piccola taglia, in morbido peluche, confortevole bordo alto di facile accesso")
];
// var_dump($items);
?>
<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
 - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
 Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS (Opzionale):
 Il **cliente** potrà sia comprare i prodotti come ospite, senza registrarsi nello store, oppure puó iscriversi e creare un **account** per ricevere cosi il 20% di sconto.
 Il cliente effettua il pagamento dei prodotti nel **carrello** con la **carta di credito**, che non deve essere scaduta.
 Fare refactoring -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>PHP-OOP-2</title>
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <h1>E-commerce Animal </h1>
    </header>
    <main>
        <div class="container d-flex flex-wrap gap-4 p-5">
            <?php foreach ($items as $item) { ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $item->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item->name ?></h5>
                        <p class="card-text"><?php echo $item->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> Prezzo : <?php echo  $item->price ?></li>
                        <li class="list-group-item"> Categoria : <?php echo  $item->category->name ?></li>
                        <li class="list-group-item"> Materiale :
                            <?php if ($item->material) {
                                echo $item->material;
                            } else {
                                echo " Not value...";
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Tipo :
                            <?php if ($item->type) {
                                echo $item->type;
                            } else {
                                echo " Not value...";
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Peso :
                            <?php if ($item->weight) {
                                echo $item->weight;
                            } else {
                                echo " Not value...";
                            }
                            ?>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Compra ora </a>
                        <a href="#" class="card-link">Aggiungi al carrello</a>
                    </div>
                </div>
            <?php } ?>

        </div>
    </main>

</body>

</html>