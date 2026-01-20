<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 2 - Exercice 1</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 1</h1>";


    echo "<h2>Partie 1</h2>";
    echo "<h3>Consigne</h3>";
    echo "<p>Afficher les nombres de 1 à 10 en utilisant une boucle for() ;</p>";
    echo "<p> </p>";

    echo "<h3>Exercice</h3>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$i <br>";
    }


    echo "<h2>Partie 2</h2>";
    echo "<h3>Consigne</h3>";
    echo "<p>Créez un tableau de couleur avec l’instruction array() de la forme : array(“Rouge”, “Vert”, “Bleu”, “Jaune”)...
    A partir d’une boucle for, parcourez le tableau afin d’afficher le contenu de chaque poste sur 
    le modèle suivant : La couleur n°0 est Rouge.</p>";
    echo "<p> </p>";

    echo "<h3>Exercice</h3>";

    $couleurs = array("Rouge", "Vert", "Bleu", "Jaune", "Orange", "Rose", "Violet", "Marron", "Noir", "Gris");
    for ($i = 0; $i < count($couleurs); $i++) {
        echo "La couleur n°$i est $couleurs[$i].<br>";
    }


    echo "<h2>Partie 3</h2>";
    echo "<h3>Consigne</h3>";
    echo "<p>Utilisez cette fois-ci l’instruction foreach pour parcourir le tableau précédent. 
    Vous n’afficherez ici, que la valeur de chaque case.</p>";
    echo "<p> </p>";

    echo "<h3>Exercice</h3>";

    foreach ($couleurs as $couleur) {
        echo "$couleur<br>";
    }

    echo "<h2>Partie 4</h2>";
    echo "<h3>Consigne</h3>";
    echo "<p>Créez un tableau de couleur associatif avec l’instruction array() de la forme :
    array(“red” => “Rouge”, “green” => “Vert”, “blue” => “Bleu”, “yellow” => “Jaune”)...
    Utilisez l’instruction foreach pour parcourir le tableau créé en affichant à la fois les 
    clés et les valeurs de chaque case du tableau, sur le modèle suivant : red => Rouge.</p>";
    echo "<p> </p>";

    echo "<h3>Exercice</h3>";
    $couleurs_assoc = array(
        "red" => "Rouge",
        "green" => "Vert",
        "blue" => "Bleu",
        "yellow" => "Jaune",
        "orange" => "Orange",
        "pink" => "Rose",
        "purple" => "Violet",
        "brown" => "Marron",
        "black" => "Noir",
        "gray" => "Gris"
    );
    foreach ($couleurs_assoc as $couleurpartie4 => $valeur) {
        echo "$couleurpartie4 => $valeur<br>";
    }
    echo "";

    echo "<h2>Partie 5</h2>";
    echo "<h3>Consigne</h3>";
    echo "<p>Afficher les nombres de 1 à 10 en utilisant une boucle while().</p>";
    echo "<p> </p>";

    echo "<h3>Exercice</h3>";
    $i = 1;
    while ($i <= 10) {
        echo "$i <br>";
        $i++;
    }

    echo "<h2>Partie 6</h2>";
    echo "<h3>Consigne</h3>";
    echo "<p>Créez un tableau de couleur avec l’instruction array() de la forme : array(“Rouge”, “Vert”, “Bleu”, “Jaune”)...
    A partir d’une boucle while, parcourez le tableau afin d’afficher le contenu de chaque poste sur le modèle suivant: 
    La couleur n°1 est Rouge. Attention, l’écriture d’une boucle while est différente d’une boucle for.</p>";

    echo "<p> </p>";

    echo "<h3>Exercice</h3>";
    $i = 0;
    while ($i < count($couleurs)) {
        echo "La couleur n°$i est $couleurs[$i].<br>";
        $i++;
    }

    echo "<h2>Partie 7</h2>";
    echo "<h3>Consigne</h3>";
    echo "<p>Afficher les nombres de 1 à 10 en utilisant une boucle do… while().</p>";

    echo "<p> </p>";

    echo "<h3>Exercice</h3>";
    $i = 1;
    do {
        echo "$i <br>";
        $i++;
    } while ($i <= 10);


    echo "<h2>Partie 8</h2>";
    echo "<h3>Consigne</h3>";
    echo "<p> Créez un tableau de couleur avec l’instruction array() de la forme : array(“Rouge”, “Vert”, “Bleu”, “Jaune”)...
    A partir d'une boucle do… while, parcourez le tableau afin d'afficher le contenu de chaque poste sur le modèle suivant : 
    La couleur n°1 est Rouge. Attention, l'écriture d'une boucle do… while est différente d'une boucle for et while.</p>";

    echo "<p> </p>";

    echo "<h3>Exercice</h3>";
    $j = 0;
    do {
        echo "La couleur n°$j est $couleurs[$j].<br>";
        $j++;
    } while ($j < count($couleurs));
    ?>
</body>

</html>