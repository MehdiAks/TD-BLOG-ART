<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 2 - Exercice 5</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 5</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p> Reprenez le tableau précédent. Affichez cette fois les valeurs dans un tableau HTML où chaque 
    ligne correspond à une voiture sur le modèle de cases suivantes :
    Marque | Couleur | Nombre de places | Quantité </p>";
    echo "<h2>Exercice</h2>";


    $voitures = array(
        array("Volvo", "rouge", "4 places", 3),
        array("Renault", "rouge", "4 places", 3),
        array("BMW", "blanche", "coupé", 4),
        array("Saab", "bleue", "4 places", 4),
        array("Renault", "blanche", "4 places", 3),
        array("Ford", "rouge", "4 places", 5),
        array("Renault", "rouge", "4 places", 2),
        array("Land Rover", "verte", "8 places", 2),
        array("Ford", "verte", "2 places", 10)
    );
    echo "<table>";

    /* Ligne d'en-tête */
    echo "<tr>";
    echo "<th>Marque</th>";
    echo "<th>Couleur</th>";
    echo "<th>Nombre de places</th>";
    echo "<th>Quantité</th>";
    echo "</tr>";

    /* Parcours du tableau des voitures */
    for ($i = 0; $i < count($voitures); $i++) {

        echo "<tr>";

        for ($j = 0; $j < count($voitures[$i]); $j++) {
            echo "<td>" . $voitures[$i][$j] . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";

    ?>
<?php include "../includes/footer.php"; ?>
</body>

</html>