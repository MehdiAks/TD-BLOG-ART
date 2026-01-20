<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 1 - Exercice 6</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 6</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p> Créez 2 variables et donnez-leur chacune une valeur entière différente. 
    A l’aide d’une condition if, affichez la plus grande valeur des 2. S’il y a égalité, dites-le.
    Vous devrez écrire ces tests en écriture imbriquée puis en écriture linéaire.</p>";

    echo "<h2>Exercice</h2>";
    $nombre_A = 30;
    $nombre_B = 30;
    if ($nombre_A < $nombre_B) {
        echo "<p> $nombre_B est plus grand que $nombre_A</p>";
    } elseif ($nombre_B == $nombre_A) {
        echo "<p> Les deux nombres sont égaux </p>";
    } else {
        echo "<p> $nombre_A est plus grand que $nombre_B</p>";
    }
    ?>
    <?php include "../includes/footer.php"; ?>
</body>

</html>