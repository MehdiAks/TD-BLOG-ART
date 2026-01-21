<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD4 - Exercice 7</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 7</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> </p>";
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    ?>

    <form action="Ex07.php" method="post">
        <input id="taille_x" type="number" name="taille_x" placeholder="Taille de la croix"><br>
        <input type="submit" value="Envoyer">
    </form>


    <?php
    if (isset($_POST['taille_x'])) {

        $taille = intval($_POST['taille_x']);

        if ($taille > 0) {

            echo "<pre>";
            for ($i = 0; $i < $taille; $i++) {
                for ($j = 0; $j < $taille; $j++) {

                    // Croix en X : diagonales
                    if ($i == $j || $i + $j == $taille - 1) {
                        echo "* ";
                    } else {
                        echo "  ";
                    }
                }
                echo "\n";
            }
            echo "</pre>";

        } else {
            echo "<p>Veuillez entrer un nombre entier positif.</p>";
        }
    }
    ?>
    <?php include "../includes/footer.php"; ?>
</body>

</html>