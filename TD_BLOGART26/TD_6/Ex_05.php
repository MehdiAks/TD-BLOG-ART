<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD6 - Exercice 5</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi TD6 - Exercice 5</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p>Si l’on veut utiliser ce système pour afficher un lien sur le modèle : 
    [url=https://www.mmibordeaux.com/]MMI Bordeaux[/url] => <a href=”https://www.mmibordeaux.com”>MMI Bordeaux</a>
    // Cela va être un peu plus dur, il va falloir utiliser du code REGEX avec la fonction preg_replace(). 
    // Voici le code REGEX à utiliser : #\[url=(.+?)\](.+?)\[\/url\]# 
    // On part sur le modèle[url=1]2[/url]. Pour commencer, on doit ajouter des symboles # pour délimiter le début et la fin.
    //  Ensuite, comme les symboles [ ] et / ont un sens en REGEX, pour les utiliser littéralement, il faut mettre \ devant 
    // chacun d’eux.
    // Dans les positions 1 et 2 on peut avoir n’importe quelle chaîne de caractère. On utilise (.+?) pour spécifier cela. 
    // En deuxième paramètre de la fonction, on utilisera ‘<a href="$1">$2</a>’ afin de repositionner 
    // les chaînes de caractères qui varient aux bons endroits. Voilà comment traduire notre code en HTML grâce au REGEX. 
    // Testez si vous réussissez à afficher un lien.
    // Vous avez maintenant tous les outils pour comprendre comment s’implémente le “BBcode”.
    // https://regex101.com/
    // https://www.phpbb-fr.com/forums/help/bbcode </p>";
    ?>

    <?php
    echo "<h2>Exercice</h2>";
    ?>

    <?php

    ?>

    <?php include "../includes/footer.php"; ?>
</body>

</html>