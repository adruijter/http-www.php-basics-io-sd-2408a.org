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

        $teller = 100;
        $teller %= 10;
        echo "<p>$teller</p>"; //output 0
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
    ?>

</body>
</html>