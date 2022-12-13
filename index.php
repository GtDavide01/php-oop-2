<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
 - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
 Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS (Opzionale):
 Il **cliente** potrà sia comprare i prodotti come ospite, senza registrarsi nello store, oppure puó iscriversi e creare un **account** per ricevere cosi il 20% di sconto.
 Il cliente effettua il pagamento dei prodotti nel **carrello** con la **carta di credito**, che non deve essere scaduta.
 Fare refactoring -->

<?php
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Gioco.php";
require_once __DIR__ . "/Models/Cibo.php";
require_once __DIR__ . "/Models/Cuccia.php";
require_once __DIR__ . "/Models/Database.php";
require_once __DIR__ . "/Models/Cliente.php";
require_once __DIR__ . "/Models/Carrello.php";
require_once __DIR__ . "/Models/Carta.php";
// var_dump($items);

$utente = new Cliente("Davide", "davidefiorini01@gmail.com");
$utente->carrello = new Carrello();
$utente->carrello->add($items[0]);
$utente->carrello->add($items[2]);
$totale = $utente->carrello->getTotal();


$utente->addCarta(new Carta("1233434343", "561", "10", "2026"));
var_dump($utente);
$result = $utente->pay($totale);
var_dump($result);

?>
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
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <li class="list-group-item">
                            <?php if ($item->category->name ==  "Cani") {
                            ?> <i class="fa-solid fa-dog"></i> <?php echo "Cani";
                                                            } else {
                                                                ?>
                                <i class="fa-solid fa-cat"></i>
                            <?php echo "Gatti";
                                                            } ?>
                        </li>
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