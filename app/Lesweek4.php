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
    <h3>Controlestructuren met PHP</h3>

    <?php
        /**
         * Met een if-else controlestructuur kun je keuzes maken 
         * in je programmacode
         */

         $waarOfNiet = true;

         if ($waarOfNiet) {
            echo "Het is waar";
         } else {
            echo "Het is niet waar";
         }

         $voornaam = "Johan";

         if ($voornaam == "Arjan") {
            echo "Mijn voornaam is Arjan";
         } elseif ($voornaam == "Bert") {
            echo "Mijn voornaam is Bert";
         } elseif ($voornaam == "Johan") {
            echo "Mijn voornaam is Johan";
         } else {
            echo "Naam onbekend";
         }

    ?>

</body>
</html>