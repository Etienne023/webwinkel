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

    <link rel="stylesheet" href="style.css">
    <title>webshop</title>
</head>

<body>
    <header>
        <div class="logo"><img src="images/logoepic.png"></div>

        <nav>
            <ul>
                <li><a href="homepage.html">Store</a></li>
                <li><a href="">Support</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="informatie">
                <?php foreach ($all_games as $game) : ?>
                    <a href="dyinglight.html" class="game"><img src="images/<?php echo $game["plaatjes"] ?>">

                        <p class="basegame"><?php echo $game["basegame"] ?></p>
                        <p class="gamenaam"><?php echo $game["name"] ?></p>
                        <p class="prijs"><?php echo $game["price"] ?> </p>
                    </a>
                <?php endforeach ?>


                <!-- <div class="game">
                        <a href="http://127.0.0.1:5500/starwars.html"><img src="images/legostarwars.avif"
                                alt=" dit plaatje kan niet geladen worden" alt="dit plaatje kan niet geladen worden">
                            <p class="basegame">Base game</p>
                            <p class="gamenaam">LegoStarWars</p>
                            <p class="prijs">€49.99</p>
                    </div>
                    <div class="game">
                        <a href="http://127.0.0.1:5500/hogwarts.html"><img src="images/hogwarts.avif"
                                alt="dit plaatje kan niet geladen worden">

                            <p class="basegame">Base game</p>
                            <p class="gamenaam">hogwarts</p>
                            <p class="prijs">€59.99</p>
                    </div>
                    <div class="game">
                        <a href="http://127.0.0.1:5500/spiderman.html"></a><img src="images/spiderman.avif"
                            alt="dit plaatje kan niet geladen worden">

                        <p class="basegame">Base game</p>
                        <p class="gamenaam">Spiderman</p>
                        <p class="prijs">€59.99</p>

                    </div>
                    <div class="game">
                        <a href="http://127.0.0.1:5500/cyberpunk.html"></a><img src="images/cyberpunk.avif"
                            alt="dit plaatje kan niet geladen worden">

                        <p class="basegame">Base game</p>
                        <p class="gamenaam">cyberpunk</p>
                        <p class="prijs">€59.99</p>
                    </div>
                </div> -->



            </div>
    </main>
    <footer>

        <div class="container1">

            <h3>resources</h3>
            <ul>
                <li>Support-A-Creator</li>
                <li>Distribute on Epic Games</li>
                <li>Careers</li>
                <li>Company</li>
            </ul>
        </div>
        <div class="footer1">
            <h3>Made By Epic Games</h3>
            <ul>
                <li>Battle Breakers</li>
                <li>Fortnite</li>
                <li>Infinity Blade</li>
            </ul>
        </div>

        <hr class="streepje">

        <div class="footer2">
            <ul>
                <li>© 2023, Epic Games, Inc. All rights reserved. Epic, Epic Games, the Epic Games logo, Fortnite, the Fortnite logo, Unreal, Unreal Engine, the Unreal Engine logo, Unreal Tournament, and the Unreal Tournament logo are trademarks or registered trademarks of Epic Games, Inc. in the United States of America and elsewhere. Other brands or product names are the trademarks of their respective owners.</li>
            </ul>
        </div>
    </footer>
</body>

</html>