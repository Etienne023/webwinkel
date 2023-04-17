<?php

require "database.php";


//de sql query
$sql = "SELECT * FROM producten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_games = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>webshop</title>
</head>
<?php include("nav.php") ?>

<body>
    <div class="main-wrapper">
        <main>
            <div class="container">
                <div class="informatie">
                    <?php foreach ($all_games as $game) : ?>
                        <a href="product-detail.php?productcode=<?php echo $game["productcode"] ?>" class="game"><img src="images/<?php echo $game["plaatjes"] ?>">

                            <p class="basegame"><?php echo $game["basegame"] ?></p>
                            <p class="gamenaam"><?php echo $game["name"] ?></p>
                            <p class="prijs"><?php echo $game["price"] ?> </p>
                        </a>
                    <?php endforeach ?>
            </div>
        </main>

        <?php include("footer.php") ?>


