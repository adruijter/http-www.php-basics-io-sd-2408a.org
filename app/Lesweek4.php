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
            echo "<p>Mijn voornaam is Arjan</p>";
         } elseif ($voornaam == "Bert") {
            echo "<p>Mijn voornaam is Bert</p>";
         } elseif ($voornaam == "Johan") {
            echo "<p>Mijn voornaam is Johan</p>";
         } else {
            echo "<p>Naam onbekend</p>";
         }

         /**
          * Maak een if-else controlestructuur die op scherm zet of 
          * een getal gelijk is aan 10 of niet
          * 
          * output:
          * Het getal is gelijk aan 10
          * of
          * Het getal is niet gelijk aan 10
          * zorg ervoor dat de code kan checken of het getal 
          * kleiner is dan 8 (<) of groter (>) dan 8
          */

          $getal1 = 12;

          if ($getal1 == 10) {
            echo "<p>Het getal is gelijk aan 10</p>";
          } elseif ($getal1 < 10) {
            echo "<p>Het getal is kleiner dan 10</p>";
          } elseif ($getal1 > 10)
            echo "<p>Het getal is groter dan 10</p>";
          else {
            echo "<p>Het getal is onbekend</p>";
          }


          /**
           * Er bestaat ook de switch-case controlestructuur
           */

        $deelVanDeDag = 'zondag';

        switch ($deelVanDeDag) {
            case 'ochtend': 
                echo "<p>Goedemorgen, het is ochtend</p>";
                break;
            case 'middag':
                echo "<p>Goedemiddag, wat kan voor u doen</p>";
                break;
            case 'avond':
                echo "<p>Goedenavond, welkom bij het familiediner</p>";
                break;
            case 'nacht':
                echo '<p>Goedenacht, welterusten</p>';
                break;
            default:
                echo "<p>Deel van de dag is niet bekend!</p>";
        }

        /**
         * Maak een switch - case van de onderstaande if-elseif-else controle structuur
         * Bouw deze dus om.
         *           
         * $userrole = 'Hacker';
         * 
         * if ($userrole == 'Administrator') {
         *      echo "Welkom terug Administrator<br>";
         * } elseif ($userrole == 'Customer') {
         *      echo "Welkom terug Customer<br>";
         * } elseif ($userrole == 'Moderator') {
         *      echo "Welkom terug Moderator<br>";
         * } elseif ($userrole == 'Hacker') {
         *      echo "Je bent niet zo welkom hier Hacker!<br>";
         * } else {
         *      echo "Welkom terug<br>";
         * } 
         */

        $userrole = 'slkdjslk';

        switch ($userrole) {
            case 'Administrator':
                echo '<p>Welkom terug Administrator</p>';
                break;
            case 'Customer':
                echo '<p>Welkom terug Customer</p>';
                break;
            case 'Moderator':
                echo '<p>Welkom terug Moderator</p>';
                break; 
            case 'Hacker':
                echo '<p>You are not so welcome Hacker</p>'; 
                break;
            default:
                echo '<p>Welkom terug</p>';          
        }


    ?>

</body>
</html>