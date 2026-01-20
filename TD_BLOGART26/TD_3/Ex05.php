<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD1 - Exercice 5</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 5</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> Créez une méthode division() qui prend 2 nombres entiers en paramètre (dividende et diviseur) 
    et qui affiche une phrase sur le modèle suivant : 2 / 5 = 0.20.
    Mais si le diviseur vaut 0, que se passe-t-il ? Il va falloir gérer l’erreur grâce à une exception. </p>";
    echo "<h2>Exercice</h2>";

    function division($dividende = 5, $diviseur = 10)
    {
        try {
            if ($diviseur == 0) {
                throw new Exception("Division par zéro");
            }
            $resultat = $dividende / $diviseur;
            echo "<p>$dividende / $diviseur = " . number_format($resultat, 2) . "</p>";
        } catch (Exception $e) {
            echo "<p>Impossible de diviser par zéro.</p>";
        }
    }

    division(12, 13);
    ?>


    <?php include "../includes/footer.php"; ?>
</body>

</html>