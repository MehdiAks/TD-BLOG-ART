<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD4 - Exercice 3</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 3</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> Créez une page PHP qui affiche 'Bonjour [Prénom]' si elle reçoit une donnée 
    $-ET nommée prenom. Utilisez la fonction isset() pour savoir si la variable existe. 
    Testez en ajoutant à la fin de l’adresse URL de votre page la donnée à afficher.</p>";
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    if (isset($_GET['prenom'])) {
        echo "<p>Bonjour " . htmlspecialchars($_GET['prenom']) . "</p>";
    } else {
        echo "<p>Aucun prénom fourni.</p>";
    }

    ?>


    <?php include "../includes/footer.php"; ?>
</body>

</html>