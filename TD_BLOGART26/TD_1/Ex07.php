<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD 1 - Exercice 7</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 7</h1>";
    echo "<h2>Consigne</h2>";
    echo "<p> Créez une variable qui contient un nombre entier compris entre 1 et 7. 
    A partir de l’instruction switch, affichez le jour de la semaine correspondant en fonction 
    de la valeur de la variable (1 = lundi, 2 = mardi…). Dans le cas où la valeur n’est pas comprise 
    entre 1 et 7, affichez un message d’erreur. </p>";
    echo "<h2>Exercice</h2>";
    echo "<form method='POST'>
        <input type='number' name='nombre' min='1' required>
    </form>";
    
    if (!empty($_POST['nombre'])) {
        $nombre = intval($_POST['nombre']);
        switch ($nombre) {
        case 1:
            echo "<p>Lundi</p>";
            break;
        case 2:
            echo "<p>Mardi</p>";
            break;
        case 3:
            echo "<p>Mercredi</p>";
            break;
        case 4:
            echo "<p>Jeudi</p>";
            break;
        case 5:
            echo "<p>Vendredi</p>";
            break;
        case 6:
            echo "<p>Samedi</p>";
            break;
        case 7:
            echo "<p>Dimanche</p>";
            break;
        default:
            echo "<p>Erreur : le nombre doit être compris entre 1 et 7.</p>";
            break;
        }
    }
    ?>
    <?php include "../includes/footer.php"; ?>
</body>

</html>