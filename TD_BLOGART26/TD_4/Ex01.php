<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD4 - Exercice 1</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php include "../includes/header.php"; ?>

    <?php
    
    echo "<h1>Afankous Mehdi - Exercice 1</h1>";
    echo "<h2>Consigne :</h2>";
    echo '<p> Créez un fichier PHP nommé "header.php" qui contient le message "Ceci est le haut de ma page". Créez un fichier PHP nommé "footer.php" qui contient le message "Ceci est le bas de ma page". Créez un fichier PHP nommé "main.php" qui inclut le fichier header.php et le fichier footer.php et qui affiche le message "Ceci est le contenu central de ma page" de manière à ce que la phrase soit entre les 2 autres de manière logique. Testez une fois avec un require, un include, un require_once et un include_once (regardez la documentation PHP)</p>';
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    echo "Ceci est le contenu central de ma page";
    ?>


    <?php include "../includes/footer.php"; ?>
</body>

</html>