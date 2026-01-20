<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD3 - Exercice 7</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 7</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> Créez une variable qui contient un entier, puis une deuxième variable qui contient une chaîne de caractères.
    Utilisez la fonction var_dump() deux fois pour afficher chaque variable.
    ette fonction est très utile pour déboguer un script PHP lorsqu’on a besoin de savoir ce 
    que contient une variable temporairement pour essayer de résoudre le problème. </p>";
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    $nombre = 42;
    $texte = "la réponse a la vie";
    var_dump($nombre);
    var_dump($texte);


    ?>

    <?php include "../includes/footer.php"; ?>
</body>

</html>