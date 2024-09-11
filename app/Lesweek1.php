<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

<?php
    // Ik heb een variabele voor de voornaam gemaakt
    $voornaam = 'Arjan'; // dit mag ook

    # Je kunt ook met een hashtag comments maken
    $tussenvoegsel = "de";

    /* Een forwardslash met sterretje wordt
       ook gebruikt voor het maken van comments */
    $achternaam = "Ruijter";

    $straatnaam = "Julianadorpstraat";

    $huisnummer = "6 Huis";

    $woonplaats = "Amsterdam";

    $leeftijd = 56;

    $schoenmaat = 46;

    $getal1 = 4;

    $getal2 = 3;

    $som = $getal1 + $getal2;

    $verschil = $getal1 - $getal2;

    $product = $getal1 * $getal2;

    $quotient =  $getal1/$getal2;

    $macht = $getal1 ** $getal2;

    // Machtsverheffen
    $macht = pow($getal1, $getal2);

    // Worteltrekken
    $wortel = sqrt($getal1);




    /** 
     *  Dit is een voorbeeld van een docblock comment
     *  ook docblocks kunnen over meerdere regels 
     *  commentaar geven. Ze worden veel gebruikt 
     *  voor functies (komt nog)
     */

    echo "<div>";
    echo "<p>Mijn naam is $voornaam $tussenvoegsel $achternaam</p>";
    
    echo '<p>Mijn naam is ' . $voornaam . ' ' . $tussenvoegsel . ' ' . $achternaam . '</p>';

    /**
     * Opdracht maak drie variabelen straatnaam, huisnummer en woonplaats en echo daarmee de 
     * volgende zin op het scherm
     * 
     * Ik woon in de ..... straat op huisnummmer ....  te ....
     */

    echo "<p>Ik woon in de $straatnaam op $huisnummer te $woonplaats</p>";

    echo "<p>Mijn leeftijd is $leeftijd en mijn schoenmaat is $schoenmaat</p>";
    echo "</div>";

    /**
     * Maak twee variabele leeftijd en schoenmaat en schrijf deze waarden op het scherm
     * 
     */

    /**
     * Maak twee variabelen waar je getallen in kunt zetten en tel deze getallen op
     * 
     * De som van ... en ... is ....
     * 
     * Doe dit ook voor aftrekken (-) vermenigvuldigen (*) en delen (/)
     */

     echo "<div>";

     echo "<p>De som van $getal1 + $getal2 is $som</p>";

     echo "<p>Het verschil van $getal1 - $getal2 = $verschil";

     echo "<p>Het product van $getal1 x $getal2 = $product";

     echo "<p>De deling van $getal1 : $getal2 = $quotient";

     echo "<p>$getal1 tot de macht $getal2 = $macht</p>";
     
     echo "<p>De tweede machts wortel uit $getal1 = $wortel</p>";


     echo "</div>";

    
?>

    <a href="../index.html">Terug</a>
</body>
</html>