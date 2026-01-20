<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 2 - Exercice 4</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 4</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p>
    Créez un tableau à 2 dimensions avec l’instruction array(array()), de la forme :<br>
        array (<br>
            array(\"Volvo\",\"rouge\",\"4 places\", 3),<br>
            array(\"Renault\",\"rouge\",\"4 places\", 3),<br>
            array(\"BMW\",\"blanche\",\"coupé\", 4),<br>
            array(\"Saab\",\"bleue\",\"4 places\", 4),<br>
            array(\"Renault\",\"blanche\",\"4 places\", 3),<br>
            array(\"Ford\",\"rouge\",\"4 places\", 5),<br>
            array(\"Renault\",\"rouge\",\"4 places\", 2),<br>
            array(\"Land Rover\",\"verte\",\"8 places\", 2),<br>
            array(\"Ford\",\"verte\",\"2 places\", 10)<br>
            );<br>
        Il s’agit d’un tableau scalaire de type matrice.<br>
        A partir de 2 boucles for, vous devez parcourir le tableau et afficher les valeurs sur le modèle suivant :  </p>";
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

    for ($i = 0; $i < count($voitures); $i++) {

        echo "La voiture " . $voitures[$i][0] .
            " est " . $voitures[$i][1] .
            ", " . $voitures[$i][2] .
            ", quantité : " . $voitures[$i][3] . ".";

        echo "<br>";
    }

    ?>
</body>

</html>