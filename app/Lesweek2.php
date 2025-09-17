<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>PHP Basics A</title>
</head>
<body>
    
<?php
    // String variabele
    $sport = 'Tennis';
    echo "<p>Mijn sport is $sport</p>";

    // Integer variabele 
    $leeftijd = 56;
    echo "<p>Mijn leeftijd is $leeftijd</p>";

    // Boolean variabele kan true of false zijn of 1 of 0
    $ikBenMiljonair = false;

    if ( $ikBenMiljonair == true ) {
        echo "<p>Ik ben miljonair</p>";
    } else {
        echo "<p>Ik ben nog net niet miljonair</p>";
    }

    // Hieronder het datatype indexed-array
    //               0          1
    $snoep = array(
                'Mars', 
                'Snickers',
                'Twix',
                'Milky Way',
                'Nuts',
                'Lion',
                'Bounty' 
             );
    
    echo "Mijn favo snoep is: $snoep[0]";

    echo "<p>In mijn top 5 van snoep zit $snoep[6]</p>";

    echo "<p>Mijn top 7 snoeplijst</p>";
    echo "<p>==================</p>";
    echo "<ol>";
    foreach ($snoep as $item) {
        echo "<li>$item</li>";
    }
    echo "</ol>";

     $snoep = array(
                'Mars', 
                'Snickers',
                'Twix',
                'Milky Way',
                'Nuts',
                'Lion',
                'Bounty' 
             );

    echo "<p>In mijn top 5 van snoep zit $snoep[6]</p>";

    echo "<p>Mijn top 7 snoeplijst</p>";
    echo "<p>==================</p>";
    echo "<ol>";
    foreach ($snoep as $item) {
        echo "<li>$item</li>";
    }
    echo "</ol>";
    
    /**
     * Maak een array met een top 5 lijstje met daarin 5 van jou 
     * favoriete games en gebruik een foreach-loop om deze op het
     * scherm te zetten. Voor elk spel moet een nummer staan maar
     * je mag daarvoor geen <ol><li></li></ol> gebruiken
     */

    $games = array(
                'Kings Valley',
                'Tomb Raider',
                'First Blood',
                'The Emperor',
                'Critical feature'
    );

    echo "<p>Mij top 5 favoriete games</p>";
    echo "<p>++++++++++++++++++++++</p>";
    $number = 0;
    foreach ( $games as $item) {
        $number = $number + 1;
        echo "$number. $item<br>";
    }


    /**
     * Maak een associatief array met daarin je 8 favoriete sneakers inclusief prijs. Gebruik een 
     * foreach-loop en de output moet er als volgt uitzien:
     * 
     * Mijn favoriete sneakers
     * ***********************
     * Schoen 1: Adidas - 231,45 euro
     * Schoen 2: ......
     * enz.....
     * Schoen 8: Nike - 187,67 euro
     */

     $sneakers = array(
                    'Converse' => '245,23', 
                    'Adidas' => '234,35',
                    'Reekbok' => '198,00',
                    'Puma' => '34,98',
                    'Vans' => '124',
                    'Asics'=> '456,23',
                    'Nike' => '457,97',
                    'New Balance' => '0,98'
                 );

     echo "<p>Mijn favoriete sneakers</p>";
     echo "*******************";

     $nummering = 0;
     foreach ($sneakers as $key => $price) {
        // $nummering = $nummering + 1;
        $nummering++;
        echo "<p>Schoen $nummering: $key - $price&euro;</p>";  // ampersand &
     }


     /**
      * Dit is een associatief array
      */

      $persoonsgegevens = array(
                            'voornaam' => 'Arjan',  //Dit is een sleutel - waarde paar
                            'tussenvoegsel' => 'de',
                            'achternaam' => 'Ruijter'
                         );
      echo "<p>Mijn naam is: {$persoonsgegevens['voornaam']} {$persoonsgegevens['tussenvoegsel']} {$persoonsgegevens['achternaam']}</p>";


      /**
       * Maak een associatief array met daarin de top 5 snelste auto's ter wereld en 
       * de topsnelheid daarin vermeld. De output ziet er als volgt uit:
       * 
       * ====================================
       * Top 5 snelste sportauto's ter wereld
       * ====================================
       * 1. Bugatti Veyron => 456 km/h  // letters rood
       * 2. Fiat Diablo    => 234 km/h  // letters blauw
       * 3. ...........                 // letter rood enz..
       * 
       */
    
       $fastestCars = array(
                        'Koenigsegg Jesko Absolut' => '531',
                        'Bugatti Chiron Super Sport 300+' => '490',
                        'SSC Tuatara' => '475',
                        'Hennessey Venom F5' => '437',
                        'Rimec Nevera' => '415'
                      );

       echo "======================<br>
             Top 5 snelste sportauto's ter wereld<br>
             ======================<br>";
       echo "<ol>";
       foreach ($fastestCars as $car => $speed) {
            echo "<li>$car => $speed km/u</li>";
       }
       echo "</ol>";


       /**
        * Opdracht 5
        * ========
        * Maak een assiatief array met de top 5 sociale mediaplatforms en hun aantal 
        * gebruiker. Gebruik een foreach-loop. De output ziet er als volgt uit:
        * 
        * &&&&&&&&&&&&&&&&&&&&&&&&&&&&&
        * Top 5 sociale media-platforms
        * -----------------------------
        * 1. facebook heeft ongeveer 2,9 miljard gebruikers 
        * 2. Youtube heeft ....
        * 3. .....
        * 4. enz.....
        */
       
       
        

?>

</body>
</html>