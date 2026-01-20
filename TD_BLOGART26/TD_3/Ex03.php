<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD3 - Exercice 3</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 3</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> Créez une méthode addition() qui prend 2 nombres entiers en paramètre (operande1 et operande2) 
    et qui affiche une phrase sur le modèle suivant : 5 + 6 = 11. Le résultat du calcul doit être le bon
    quels que soient les nombres en paramètre.</p>";
    echo "<h2>Exercice</h2>";


    function addition($nombre1, $nombre2)
    {
        $resultat = $nombre1 + $nombre2;
        echo "<p> $nombre1 + $nombre2 = $resultat </p>";
    }
    addition(12, 13)
    ?>

    <?php include "../includes/footer.php"; ?>
</body>

</html>