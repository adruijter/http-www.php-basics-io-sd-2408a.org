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

    /** 
     *  Dit is een voorbeeld van een docblock comment
     *  ook docblocks kunnen over meerdere regels 
     *  commentaar geven. Ze worden veel gebruikt 
     *  voor functies (komt nog)
     */

    echo "<div>";
    echo "<p>Mijn naam is $voornaam $tussenvoegsel $achternaam</p>";
    
    // echo '<p>Mijn naam is ' . $voornaam . ' ' . $tussenvoegsel . ' ' . $achternaam . '</p>';

    /**
     * Opdracht maak drie variabelen straatnaam, huisnummer en woonplaats en echo daarmee de 
     * volgende zin op het scherm
     * 
     * Ik woon in de ..... straat op huisnummmer ....  te ....
     */

    echo "<p>Ik woon in de $straatnaam op $huisnummer te $woonplaats</p>";
    echo "</div>";
?>

    <a href="../index.html">Terug</a>
</body>
</html>