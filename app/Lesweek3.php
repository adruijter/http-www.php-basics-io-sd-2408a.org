<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>PHP Basics</title>
</head>
<body>
    <h3>Functies met PHP</h3>

    <?php
    /**
     * Binnen de programmeerwereld geldt het DRY-principe
     * D.w.z Don't repeat yourself
     */

    $getal1 = 10;
    $getal2 = 5;
    $som = $getal1 + $getal2;
    echo "<p>De som van $getal1 + $getal2 = $som</p>";

    $getal1 = 100;
    $getal2 = 34;
    $som = $getal1 + $getal2;
    echo "<p>De som van $getal1 + $getal2 = $som</p>";

    $getal1 = 5;
    $getal2 = 27;
    $som = $getal1 + $getal2;
    echo "<p>De som van $getal1 + $getal2 = $som</p>";

    function noemMijnNaam($voornaam, $tussenvoegsel = NULL, $achternaam = NULL)
    {
        //Dit noem het code block
        echo "<p>Mijn naam is $voornaam $tussenvoegsel $achternaam</p>";
    }

    noemMijnNaam('Bert', 'van', 'Marwijk');
    noemMijnNaam('Arjan', 'de', 'Ruijter');
    noemMijnNaam('Frans');

    /**
     * Maak een functie berekenSom() die twee getallen kan optellen. Het is verplicht om
     * Twee getallen mee te geven aan de functie. Roep de functie 3 maal aan
     * met de waarden (3, 4) (9, 7) en (4, 2). De output is:
     * De som van 3 + 4 = 7
     * De som van 9 + 7 = 16
     * De som van 4 + 2 = 6
     */

     

    ?>
</body>
</html>