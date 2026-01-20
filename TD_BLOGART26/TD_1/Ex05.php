<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 1 - Exercice 5</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 5</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p> Créez 3 variables : une variable avec un nombre entier, une variable avec un nombre décimal, 
    et une variable avec un booléen. Utilisez la fonction gettype(variable) pour afficher le type de ces 3 variables.</p>";
    echo "<h2>Exercice</h2>";
    $entier = 10;
    $decimal = 12.5;
    $booleen = TRUE;
    $typeentier = gettype($entier);
    $typedecimal = gettype($decimal);
    $typebooleen = gettype($booleen);
    echo "<p> $typeentier<p>";
    echo "<p> $typedecimal<p>";
    echo "<p> $typebooleen<p>";
    ?>
    <?php include "../includes/footer.php"; ?>
</body>

</html>