<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD4 - Exercice 6</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 6</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p>Créez un formulaire HTML contenant une liste déroulante de 5 sports, 3 choix de boutons 
    pour des parfums de glaces, une case à cocher si on aime la programmation, ainsi qu’un bouton d’envoi.</p>";
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    ?>

    <?php
    // Vérifie si le formulaire a été envoyé
    if (isset($_POST['sport']) && isset($_POST['glace'])) {

        $sport = htmlspecialchars($_POST['sport']);
        $glace = htmlspecialchars($_POST['glace']);

        echo "<p>Votre sport préféré est $sport.</p>";
        echo "<p>Votre parfum de glace préféré est $glace.</p>";

        // Cas particulier de la checkbox
        if (isset($_POST['programmation'])) {
            echo "<p>Vous aimez la programmation.</p>";
        } else {
            echo "<p>Vous n’aimez pas la programmation.</p>";
        }
    }
    ?>

    <form action="Ex06.php" method="post">
        Votre sport préféré :<br>
        <select id="sport" name="sport">
            <option value="Football">Football</option>
            <option value="Basketball">Basketball</option>
            <option value="Tennis">Tennis</option>
            <option value="Golf">Golf</option>
            <option value="Rugby">Rugby</option>
        </select>
        <br><br>

        Votre parfum de glace préféré :<br>
        <input id="glace_fraise" type="radio" name="glace" value="Fraise"> Fraise <br>
        <input id="glace_chocolat" type="radio" name="glace" value="Chocolat"> Chocolat <br>
        <input id="glace_vanille" type="radio" name="glace" value="Vanille"> Vanille <br>
        <br>

        <input id="checkbox_programmation" type="checkbox" name="programmation">
        J'aime la programmation <br><br>

        <input type="submit" value="Envoyer">
    </form>
    <?php include "../includes/footer.php"; ?>
</body>

</html>