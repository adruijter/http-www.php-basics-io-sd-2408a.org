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
    <h3>Control Flow met PHP</h3>

    <?php

    $userrole = 'moderator';

    if ($userrole == 'administrator') {
        echo "Welkom terug administrator<br>";
    } elseif ($userrole == 'customer') {
        echo "Welkom terug customer<br>";
    } elseif ($userrole == 'moderator') {
        echo "Welkom terug moderator<br>";
    } else {
        echo "Welkom terug<br>";
    }

    /**
     * Maak een variabele met je favoriete sneaker als waarde
     * Maak een if-elseif-else control flow die op het scherm 
     * de melding geeft dat die sneaker je favoriet is
     */

    $sneaker = 'Reebok experience';

    if ($sneaker == 'adidas challenger') {
        echo "Adidas challenger is mijn favo sneaker<br>";
    } elseif ($sneaker == 'Nike Air') {
        echo "Nike Air is mijn favo sneaker<br>";
    } elseif ($sneaker == 'Reebok experience') {
        echo "Reekbok experience is mijn favo sneaker<br>";
    }else {
        echo "Mijn favo sneaker zit er niet bij<br>";
    }

    /**
     * Maak een if, elseif, else control flow die checked of $x kleiner/groter/gelijk is aan $y
     * De output moet zijn:
     * $x = (waarde) is groter/kleiner/gelijk aan $y = (waarde)
     */

    $x = 8;
    $y = 8;
    // output: $x = 5 is kleiner dan $y = 8

    if ($x < $y) {
        echo '$x = ' . $x . ' is kleiner dan $y = ' . $y . '<br>';
    } elseif ($y < $x) {
        echo '$x = ' . $x . ' is groter dan $y = ' . $y . '<br>';
    } else {
        echo '$x = ' . $x . ' is gelijk $y = ' . $y . '<br>';
    }


    /**
     * Maak een indexed-array met 5 verschillende soorten fruit
     * 
     * Maak een if-else control flow die aangeeft of een fruitsoort in 
     * het array of niet vb:
     * output:
     * bosbessen zit niet in het array $fruit
     * Appel zit wel in het array $fruit
     */

    $fruit = array('Sinaasappel', 'Appel', 'Kiwi', 'Banaan', 'Meloen');
    $fruitSoort = 'Kiwi';

    in_array($fruitSoort, $fruit);

    if (in_array($fruitSoort, $fruit)) {
        echo "$fruitSoort zit in het array <br>";
    } else {
        echo "$fruitSoort zit niet in het array <br>";
    }

    /**
     * Maak een een if-elseif-else control flow die Goedenmorgen, Goedenmiddag of Goedenavond
     * wenst afhankelijk van de waarde van $dagdeel (ochtend, middag avond)
     * 
     * $dagdeel = 'ochtend';
     * Output:
     * Goedenmorgen!
     */

    $dagdeel = 'ochtend';

    if ($dagdeel == 'ochtend') {
        echo 'Goedemorgen!<br>';
    } elseif ($dagdeel == 'middag') {
        echo 'Goedenmiddag!<br>';
    } elseif ($dagdeel == 'avond') {
        echo 'Goedenavond!<br>';
    } else {
        echo 'Goedennacht!<br>';
    }


    /**
     * switch case
     */
    $partOfTheDay = 'afternoon';
    
    switch ($partOfTheDay) {
        case 'morning':
            echo 'Goodmorning!<br>';
            break;
        case 'afternoon':
            echo 'Goodafternoon!<br>';
            break;
        case 'evening':
            echo 'Goodevening!<br>';
            break;
        case 'night':
            echo 'Goodnight!<br>';
            break;
        default:
            echo 'Part of the day is not known';
            break;
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
    
     $userrole = 'Admirator';

     switch ($userrole) {
        case 'Administrator':
            echo 'Welkom terug Administrator<br>';
            echo '============================<br>';
            break;
        case 'Customer':
            echo 'Welkom terug Customer<br>';
            echo '============================<br>';
            break;
        case 'Moderator':
            echo 'Welkom terug Moderator<br>';
            echo '============================<br>';
            break;
        case 'Hacker':
            echo 'Je bent niet zo welkom hier Hacker!<br>';
            echo '============================<br>';
            break;
        default:
            echo 'Welkom terug!<br>';
            echo '=================<br>';
     }

     /**
      * Maak een switch case controle structuur die aangeeft welke 
      * opleiding je hebt gehaald
      */

      $education = 'VMBO TL';  //VMBO Gemengd, VMBO Kader, VMBO Basis

      //output: 
      //Ik heb mijn VMBO TL dipoma behaald <br>
      //=======================================

      /**
       * While loop
       */

      $number = 1990;
      while ($number <= 2010) {
        echo $number . "<br>";
        $number++;
      }

      /**
         * Maak een while loop die de onderstaande afbeelding maakt
         * +
         * ++
         * +++
         * ++++
         * +++++
         * ++++++
         * +++++++
         * ++++++++
         * +++++++
         * ++++++
         * +++++
         * ++++
         * +++
         * ++
         * +
         *
         * Tip $number++ verhoogt de waarde, $number-- verlaagt de waarde met een
         * echo str_repeat("+", 3) . "<br>";
         * 
         */
        echo str_repeat("*", 3) . '<br>';

        $teller = 1;
        while ($teller <= 15) {
            if ($teller <= 8) {
                echo str_repeat('+', $teller) . '<br>';
            } else {
                echo str_repeat('+', 16 - $teller) . '<br>';
            }
            $teller++;
        }

        /**
         * Do while loop
         */
        $number = 1;

        do {
            echo $number . '<br>';
            $number++;
        } while ($number <= 10);

        /**
         * Maak een indexed array met 8 items
         * Zet de waarden van het array met een do while loop 
         * op het scherm
         */
         $groenten = array('Bloemkool', 'Prei', 'Wortel', 'Ui', 
                            'Chinese Kool', 'Biet', 'Tomaat', 'Radijs');

        // echo $groenten[0] . '<br>';

        $index = 0;

        do {
            echo $groenten[$index] . '<br>';
            $index++;
        } while ($index <= 7);


        /**
         * Foreach loop
         */

        $sneakers = array('Nike Air' => 239,
                          'Sketchers' => 99,
                          'Adidas Mundial' => 289);

        foreach ($sneakers as $sneakerName => $price) {
            echo $sneakerName . ": " . $price . ' euro<br>';
        }

        /**
          * Maak een associatief array $rapport met 6 vakken en het behaalde
          * cijfer zorg voor de volgende output met een foreach-loop:
          * Vak: Nederlands => cijfer: 6.7
          * Vak: Engels => 4.3
          * enz.......
          */

        $rapport = array('Nederlands' => 6.7, 
                         'Engels' => 4.3,
                         'Rekenen' => 5.5,
                         'Backend' => 2.5,
                         'Frontend' => 6.5,
                         'Gamedev' => 9.2);
                         
        foreach ($rapport as $vak => $cijfer) {
            echo "Vak: $vak => cijfer: $cijfer <br>";
        }

    ?>

</body>
</html>
