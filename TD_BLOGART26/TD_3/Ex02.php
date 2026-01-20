<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD3 - Exercice 2</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 2</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> Créez une méthode userProfile() qui prend 3 variables en paramètre : 
    firstName, lastName et country et qui affiche à l’aide de la fonction echo une phrase sur le modèle :
    “Jean Dupont habite en France”.
    Utilisez cette méthode pour afficher Jean Dupont qui habite en France, 
    Phil Kaizen qui habite en Allemagne et Gianni Giardino qui habite en Italie. </p>";

    echo "<h2>Exercice</h2>";

    function userProfile($firstName, $lastName, $country)
    {
        echo "<p> $firstName $lastName habite en $country </p>";
    }

    userProfile("Jean", "Dupon", "France");
    userProfile("Phil", "Kaizen", "Allemagne");
    userProfile("Gianni", "Giardino", "Italie");
    ?>

    <?php include "../includes/footer.php"; ?>
</body>

</html>