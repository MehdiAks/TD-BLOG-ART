<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD4 - Exercice 4</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 4</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> Créez une page PHP qui affiche Bonjour [Prénom] [Nom] si elle reçoit deux données $-GET nommées prenom 
    et nom. Testez en ajoutant à la fin de l’adresse URL de votre page les données à afficher sur le modèle 
    champ=valeur, séparées par un symbole & (Ex : exercice3.php?prenom=Toto&nom=Titi) </p>";
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    if (isset($_GET['prenom']) && isset($_GET['nom'])) {
        $prenom = htmlspecialchars($_GET['prenom']);
        $nom = htmlspecialchars($_GET['nom']);

        echo "<p>Bonjour $prenom $nom</p>";
    } else {
        echo "<p>Prénom ou nom manquant.</p>";
    }

    ?>


    <?php include "../includes/footer.php"; ?>
</body>

</html>