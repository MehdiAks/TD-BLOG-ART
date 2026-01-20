<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 1 - Exercice 3</title>
        <link rel="stylesheet" href="../assets/styletd.css">
</head>
<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 3</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p> Créez une variable qui contient la chaîne de caractère “Julie La Rousse”. 
    Donnez un nom significatif à cette variable. Puis affichez la phrase “Bonjour Julie La Rousse !” 
    à l’aide de l’instruction echo en utilisant la variable créée précédemment et en l’associant (concaténation) 
    avec des chaînes de caractères en dur pour le reste de la phrase. Vérifiez qu’il y a bien des espaces entre les 
    mots et n’oubliez pas le point d’exclamation !</p>";
    
    echo "<h2>Exercice</h2>";
    $nom = "Julie La Rousse";
    echo "<p> Bonjour " . $nom . " ! </p>";
    ?>
</body>
</html>

