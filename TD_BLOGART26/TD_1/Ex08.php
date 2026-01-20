<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 1 - Exercice 8</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 8</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p> En utilisant la fonction define(), déclarez une constante “ANNEE” dont la valeur est l’année actuelle.
    Faites ensuite un echo de cette constante et vérifiez si sa valeur s’affiche correctement.</p>";
    echo "<h2>Exercice</h2>";
    define("ANNEE", date("Y"));
    echo "<p>L'année actuelle est : " . ANNEE . "</p>";
    ?>
</body>

</html>