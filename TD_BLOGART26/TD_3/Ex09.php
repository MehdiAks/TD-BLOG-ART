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
    echo "<h1>Afankous Mehdi - Exercice 9</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> En utilisant la fonction random_int(), vous créerez un tableau de 10 cases de valeurs aléatoires 
    entre 0 et 100. Puis vous indiquerez, en parcourant le tableau, quelle est sa plus petite, 
    sa plus grande valeur et sa moyenne. </p>";
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    $nombre = array(
        array("1er nombre", "2eme nombre", "3eme nombre", "4eme nombre",  "5eme nombre", "6eme nombre", "7eme nombre", "8eme nombre", "9eme nombre", "10eme nombre",),
        array("","","","","","","","","",""),
    );
    for ($i = 0; $i < count($nombre); $i++) {
        $nombre[1][$i] = random_int(1, 100);
    }


    ?>

    <?php include "../includes/footer.php"; ?>
</body>

</html>