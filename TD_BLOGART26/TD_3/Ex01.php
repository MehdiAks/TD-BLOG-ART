<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afankous Mehdi TD3 - Exercice 1</title>
    <link rel="stylesheet" href="../assets/styletd.css">
</head>

<body>
    <?php
    echo "<h1>Afankous Mehdi - Exercice 1</h1>";
    echo "<h2>Consigne :</h2>";
    echo "<p>Créez une méthode writeMsg() qui affiche 2 messages grâce à la fonction echo. Cette méthode est sans paramètres.
    Le premier message est : “Hello girls and boys!” et le deuxième est “How are you?”.
    Appelez ensuite cette méthode. </p>";
    echo "<h2>Exercice</h2>";

    function writemsg()
    {
        echo "Hello girls and boys!<br>";
        echo "How are you?";
    }

    writemsg();
    ?>


    <?php include "../includes/footer.php"; ?>
</body>

</html>