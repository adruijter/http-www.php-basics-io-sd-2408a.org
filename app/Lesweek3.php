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
        return "<p>Mijn naam is $voornaam $tussenvoegsel $achternaam</p>";
    }

    echo noemMijnNaam('Bert', 'van', 'Marwijk');
    echo noemMijnNaam('Arjan', 'de', 'Ruijter');
    echo noemMijnNaam('Frans');

    /**
     * Maak een functie berekenSom() die twee getallen kan optellen. Het is verplicht om
     * Twee getallen mee te geven aan de functie. Roep de functie 3 maal aan
     * met de waarden (3, 4) (9, 7) en (4, 2). De output is:
     * De som van 3 + 4 = 7
     * De som van 9 + 7 = 16
     * De som van 4 + 2 = 6
     */

     function berekenSom($getal_1, $getal_2)
     {
        $som = $getal_1 + $getal_2;
        return "<p>De som van $getal_1 + $getal_2 = $som</p>";
     }

     echo berekenSom(123, 37);
     echo berekenSom(12, 7);
     echo berekenSom(13, 3);
     echo berekenSom(3, 7);
     echo berekenSom(33, 37);

    /**
     * Maak een associatief array met twee getallen als sleutel-waarde paar. Het array
     * heeft in totaal tien van deze sleutel-waarde paren. Gebruik een foreach-loop
     * om de som van deze twee getallen als sleutel-waarde paar op het scherm te krijgen.
     */

     $getallenParen = array(
        3 => 5,
        6 => 7,
        8 => 56,
        9 => 12,
        34 => 32,
        88 => 45,
        42 => 2,
        123 => 56,
        45 => 43,
        4 => 5
     );

     foreach () {
        
     }

    ?>
</body>
</html>