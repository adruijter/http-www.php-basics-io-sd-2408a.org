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
    <h3>Operatoren met PHP</h3>

    <h5>Assignment operator (toewijzingsoperator =)</h5>
    <?php
        $teller = 5;
        echo "<p>$teller</p>";
    ?>

    <h5>Arithmic assignment operator (rekenkundige toewijzingsoperator)</h5>
    <?php
        $teller = 30;
        echo "<p>$teller</p>"; // output 30

        $teller += 30;
        echo "<p>$teller</p>"; //output 60

        $teller -= 20;
        echo "<p>$teller</p>"; //output 40

        $teller *= 3;
        echo "<p>$teller</p>"; //output 120

        $teller /= 2;
        echo "<p>$teller</p>"; //output 60

        $teller **= 2;
        echo "<p>$teller</p>"; //output 3600

        $teller .= " euro";
        echo "<p>$teller</p>"; //output 3600 euro

        $teller = 101;
        $teller %= 10;
        echo "<p>$teller</p>"; //output 1
    ?>

    <h5>Increment (++) en de decrement (--) operator</h5>

    <?php
        $number = 100;
        echo "<p>$number</p>"; //output 100

        $number++;
        echo "<p>$number</p>"; //output 101

        $number = 100;
        echo "<p>$number</p>"; //output 100

        $number--;
        echo "<p>$number</p>"; //output 99
    ?>

    <h5>Comparison operator (comparison operator)</h5>

    <?php
        /**
         *  == is gelijk aan
         *  != niet gelijk aan
         *  >= groter gelijk aan
         *  <= kleiner gelijk aan
         *  < kleiner dan
         *  > groter dan
         */

         $getal = 5;
         if ($getal == 5) {
            echo "<p>Het getal is vijf</p>";
         }

         if ($getal != 5) {
            echo "<p>Het getal is niet vijf</p>";
         }

         if ($getal > 3) {
            echo "<p>Het getal $getal is groter dan 3</p>";
         }

         if ($getal < 8) {
            echo "<p>Het getal $getal is kleiner dan 8</p>";
         }

         if ($getal <= 8) {
            echo "<p>Het getal $getal is kleiner of gelijk aan 8</p>";
         }

         if ($getal >= 8) {
            echo "<p>Het getal $getal is groter of gelijk aan 8</p>";
         }
    ?>

    <h5>De AND (&&) operator (Beide beweringen moeten waar zijn)</h5>

    <?php
        $getal = 10;

        if ($getal > 5 && $getal < 15 ) {
            echo "<p>Het getal $getal is groter dan 5 en kleiner dan 15</p>";
        }
    ?>

    <h5>De OR (||) operator (Een van beide beweringen moet waar zijn)</h5>
    <?php
        $getal = 10;
        if ($getal == 5 || $getal > 5 ) {
            echo "<p>Het getal $getal is groter of gelijk aan 5</p>";
        }

    /**
     * Maak een functie kilometerVergoeding($aantalKilometer) die berekent
     * wat de vergoeding is die je krijgt voor een aantal gereden kilometers
     * voor de eerste 10 km krijg je 0.30 euro
     * voor de kilometers tussen de 10 en de 30 krijg je 0.5 euro
     * voor alle kilometers na 30 km krijg je 1 euro
     * 
     * Voorbeeld:
     * echo kilometerVergoeding(50);
     * Output: U heeft 50 kilometer gereden, de vergoeding is 33 euro.
     */

     function kilometerVergoeding($aantalKilometer) 
     {
        $vergoeding = 0;
        if ($aantalKilometer <= 10) {
            $vergoeding += 0.30 * $aantalKilometer;
        } elseif ($aantalKilometer > 10 && $aantalKilometer <= 30) {
            $vergoeding += 3 + 0.5 * ($aantalKilometer - 10);
        } else {
            $vergoeding += 3 + 10 + 1 * ($aantalKilometer - 30);
        }

        return "<p>U heeft $aantalKilometer km gereden, de vergoeding is $vergoeding euro</p>";
     }

     echo kilometerVergoeding(50);
     echo kilometerVergoeding(5);
     echo kilometerVergoeding(25);
     echo kilometerVergoeding(35);
    ?>

    

</body>
</html>