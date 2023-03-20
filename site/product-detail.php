<?php

require "database.php";

$id = $_GET['productcode'];

$sql = "SELECT * FROM producten WHERE productcode =$id";

$result = mysqli_query($conn,$sql);
  //zolang een rij gevuld kan worden wordt de loop uitgevoerd
$producten = mysqli_fetch_assoc($result);



// Haal het resultaat uit het geheugen
mysqli_free_result($result);

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header>
    <?php include ("nav.php")?> 

    <?php include ("footer.php")?> 
    
</body>
</html>