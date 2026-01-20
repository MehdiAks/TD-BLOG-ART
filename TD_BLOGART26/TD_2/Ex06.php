<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 2 - Exercice 6</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 6</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p> Dans cet exercice, il s’agit de confirmer votre aisance dans la manipulation des boucles. 
    Vous avez le choix dans l’utilisation des boucles : for, while, do… while….  
    Même si l’une d’elles est plus naturelle que les autres.
    L’objectif est d’afficher un X à l'écran dont la taille sera définie dans une variable. 
    Vous aurez besoin de 2 boucles pour y parvenir.
    Dans l’exemple ci-dessous, l’affichage du X fonctionne pour toutes les tailles – paire et impaire) :  </p>";
    echo "<h2>Exercice</h2>";

$taille = 9; 
echo "<div class='card'>";
echo "<p class='small'>Taille : $taille</p>";
echo "<pre>";

for ($i = 0; $i < $taille; $i++) {
    for ($j = 0; $j < $taille; $j++) {
        if ($j == $i || $j == ($taille - 1 - $i)) {
            echo "X";
        } else {
            echo " ";
        }
    }
    echo "\n";
}

echo "</pre>";
echo "</div>";
?>
<?php include "../includes/footer.php"; ?>
</body>

</html>