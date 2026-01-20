<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD3 - Exercice 4</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 4</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p>Créez une méthode multiplication() qui prend 2 nombres entiers en paramètre (operande1 et operande2)
    et qui affiche une phrase sur le modèle suivant : 5 * 6 = 30.
    Attention, cette fois-ci les paramètres doivent avoir une valeur par défaut s’ils ne 
    sont pas renseignés (par exemple 5 et 10).
 </p>";
    echo "<h2>Exercice</h2>";

    function multiplication($nombre1 = 5, $nombre2 = 10)
    {
        $resultat = $nombre1 * $nombre2;
        echo "<p> $nombre1 x $nombre2 = $resultat </p>";
    }
    multiplication(12, 13)
    ?>


    <?php include "../includes/footer.php"; ?>
</body>

</html>