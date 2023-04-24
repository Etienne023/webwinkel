<link rel="stylesheet" href="css/producttoevoegen.css">
<?php include("nav.php") ?>

<div class="container">
    <h1>nieuw game</h1>
    <form action="producttoevoegen.php" method="post">

    <div class="form-groep">
        <label for="name">Naam</label>
        <input type="text" name="naamProduct" id="Name" class="input">
    </div>

    <div class="form-groep">
        <label for="catogorieproduct">catogorie</label>
        <input type="text" name="catogorieProduct" id="basegame" class="input">
    </div>

    <div class="form-groep">
        <label for="prijs">prijs</label>
        <input type="text" name="prijsgame" id="price" class="input">
    </div>

    <div class="form-groep">
        <label for="genre">genre</label>
        <input type="text" name="genre" id="genre" class="input">
    </div>

    <div class="form-groep">
        <label for="age_restriction">age_restriction</label>
        <input type="text" name="age_restriction" id="age_restriction" class="input">
    </div>

<button type="submit">Maak nieuw product!</button>
</form>

</div>