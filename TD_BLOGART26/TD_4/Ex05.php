<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD4 - Exercice 5</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 5</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p> Créez un formulaire HTML contenant 3 champs : un pour le nom, un pour le prénom, et un pour 
    le numéro de téléphone, ainsi qu’un bouton d’envoi. La cible du formulaire doit être la page sur laquelle 
    vous êtes déjà et sa méthode doit être post.</p>";
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['telephone'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $telephone = htmlspecialchars($_POST['telephone']);

        echo "<p>Bonjour $prenom $nom, votre numéro de téléphone est le $telephone.</p>";
    }

    ?>

    <form action="Ex05.php" method="post">
        <input id="nom" name="nom" type="text" placeholder="Nom"><br>
        <input id="prenom" name="prenom" type="text" placeholder="Prénom"><br>
        <input id="telephone" name="telephone" type="tel" placeholder="Téléphone"><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php include "../includes/footer.php"; ?>
</body>

</html>