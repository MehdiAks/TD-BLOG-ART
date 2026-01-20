<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 2 - Exercice 2</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 2</h1>";
    echo "<h2> Consigne </h2>";
    echo "<p> Reprenez le tableau de noms de couleurs de l’exercice 1. En utilisant la fonction count(), 
    affichez combien de valeurs sont contenues dans le tableau (affichez sa taille).</p>";
    echo "<h2>Exercice</h2>";
    $couleurs = array("Rouge", "Vert", "Bleu", "Jaune", "Orange", "Rose", "Violet", "Marron", "Noir", "Gris","Blanc");
    $countcouleur = count($couleurs);
    echo "<p> Le tableau contient $countcouleur valeurs <p>";
    ?>
    <?php include "../includes/footer.php"; ?>
</body>

</html>