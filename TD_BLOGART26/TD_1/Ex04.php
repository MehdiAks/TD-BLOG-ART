<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 1 - Exercice 4</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 4</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p> Créez une variable qui contient la chaîne de caractère “Bonjour tout le monde !”. 
    Affichez la variable avec un echo puis affichez le type de la variable en utilisant la fonction gettype(variable).</p>";
    echo "<h2>Exercice</h2>";
    $Bonjour = "Bonjour tout le monde !";
    echo "<p> $Bonjour </p>";
    $type = gettype($Bonjour);
    echo "<p> Le type de la variable Bonjour est : $type </p>";
    echo "<p></p>";
    ?>
</body>

</html>