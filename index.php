<?php
require_once __DIR__ . "/Models/Prodotto.php";
$item1 = new Prodotto("Corda", 14.99, "gg.pjg", new Categoria("Cani"));
var_dump($item1);
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
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP-OOP-2</title>
</head>

<body>

</body>

</html>