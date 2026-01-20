<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD3 - Exercice 9</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>TD 3 — Tableau aléatoire</h1>";

    // Création du tableau
    $valeurs = [];

    // Remplissage avec des valeurs aléatoires
    for ($i = 0; $i < 10; $i++) {
        $valeurs[] = random_int(0, 100);
    }

    // Initialisation
    $min = $valeurs[0];
    $max = $valeurs[0];
    $somme = 0;

    // Parcours du tableau
    foreach ($valeurs as $valeur) {

        if ($valeur < $min) {
            $min = $valeur;
        }

        if ($valeur > $max) {
            $max = $valeur;
        }

        $somme += $valeur;
    }

    // Calcul de la moyenne
    $moyenne = $somme / count($valeurs);

    // Affichage
    echo "<p>Valeurs du tableau : " . implode(", ", $valeurs) . "</p>";
    echo "<p>Valeur minimale : $min</p>";
    echo "<p>Valeur maximale : $max</p>";
    echo "<p>Moyenne : " . round($moyenne, 2) . "</p>";

    ?>
    <?php include "../includes/footer.php"; ?>
</body>

</html>