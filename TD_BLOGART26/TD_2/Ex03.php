<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 2 - Exercice 3</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 3</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p>Utilisez la fonction sort() pour afficher le tableau des couleurs par ordre croissant.
    Utilisez la fonction rsort() pour afficher le tableau des couleurs par ordre décroissant.
    Consultez la documentation PHP des fonctions en question. 
    Utilisez une boucle pour afficher toutes les valeurs du tableau. </p>";
    echo "<h2>Exercice</h2>";

    $couleurs = array("Rouge", "Vert", "Bleu", "Jaune", "Orange", "Rose", "Violet", "Marron", "Noir", "Gris", "Blanc");
    sort($couleurs);
    $i = 0;
    while ($i < count($couleurs)) {
        echo "$couleurs[$i]<br>";
        $i++;
    }
    echo "<br>";
    rsort($couleurs);
    $i = 0;
    while ($i < count($couleurs)) {
        echo "$couleurs[$i]<br>";
        $i++;
    }


    ?>
    <?php include "../includes/footer.php"; ?>
</body>

</html>