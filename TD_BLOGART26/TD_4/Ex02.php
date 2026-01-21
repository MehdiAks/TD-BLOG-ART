<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD4 - Exercice 2</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 2</h1>";
    echo "<h2>Consigne :</h2>";
    echo '<p> Créez un fichier PHP nommé "utils.php" dans un dossier nommé "lib" 
    qui contient une fonction oppose(x) qui prend un nombre entier en paramètre et retourne son opposé (x ⇒ -x).
    Dans votre fichier "main.php", utilisez un include ou un require de manière à pouvoir appeler la fonction oppose(x)
    et affichez son résultat dans votre page en prenant en paramètre un entier de votre choix. </p>';
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    require_once "../lib/utils.php";
    $nombre = 12;
    echo "<p>L'opposé de $nombre est " . oppose($nombre) . ".</p>";
    ?>


    <?php include "../includes/footer.php"; ?>
</body>

</html>