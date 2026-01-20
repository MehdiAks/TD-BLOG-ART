<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD3 - Exercice 8</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 8</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> Créez une variable qui simule un lancer de dé. En utilisant la fonction random_int(),
    cette variable doit avoir une valeur aléatoire entre 1 et 6 compris.
    Affichez la valeur tirée. Si la valeur est 6, affichez également “Félicitations !” </p>";
    echo "<h2>Exercice</h2>";

    ?>
    <?php
    $nombrealeatoire = random_int(1, 6);
    if ($nombrealeatoire == 6) {
        echo "Félicitation vous avez eu le $nombrealeatoire !";
    } else {
        echo "Ho le looser il a eu un $nombrealeatoire c'est nul !";
    }
    ?>
    <?php include "../includes/footer.php"; ?>
</body>

</html>