<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Proeftoets 2024</title>
</head>
<body>
    <h3>Proeftoets</h3>
    <h5>Vraag 2</h5><hr>

    <?php
        $noot = array(
                    'Cashewnoten',
                    'Paranoten',
                    'Hazelnoten',
                    'Amandelen',
                    'Walnoten'
        );

        echo "<ol>";
        foreach ($noot as $nootje) {
            echo "<li>$nootje</li>";
        }
        echo "</ol>";

        $index = 1;
        foreach ($noot as $nootje) {
            echo "$index. $nootje<br>";
            $index++;
        }


        echo "<h5>Vraag 3.</h5><hr>";

        $auto = array(
                    'Mercedes' => 120000,
                    'Kia' => 12000,
                    'BMW' => 230000,
                    'Audi' => 88000,
        );

        $bedrag = 0;
        foreach ($auto as $car => $price) {
            echo "<p>De $car kost $price</p>";
            $bedrag += $price;
        }
        echo "<p>Het totaalbedrag voor het wagenpark is: $bedrag</p>";


        echo "<h5>Vraag 4.</h5><hr>";

        function rekenen($getal1, $getal2, $bewerking)
        {
            if ($getal1 > 0 && $getal2 > 0 && is_int($getal1) && is_int($getal2)) 
            {
                switch($bewerking) {
                    case '+':
                        $som = $getal1 + $getal2;
                        return "<p>De som van $getal1 + $getal2 = $som</p>";
                        break;
                    case '*':
                        $product = $getal1 * $getal2;
                        return "<p>Het product van $getal1 x $getal2 = $product</p>";
                        break;
                    case '/':
                        $deling = $getal1 / $getal2;
                        return "<p>De deling van $getal1 / $getal2 = $deling</p>";
                        break;
                    case '**':
                        $macht = $getal1 ** $getal2;
                        return "<p>$getal1 tot de macht $getal2 = $macht</p>";
                        break;
                    default:
                        return '<p>U heeft een onbekende bewerking gegeven, probeer het opnieuw</p>';
    
                }
            } else {
                return '<p>Error! Geef gehele getallen op groter dan 0</p>';
            }
        }

        echo rekenen(3, 8, "+");
        echo rekenen(1, 5, "*");
        echo rekenen(10, 20, "/");
        echo rekenen(2, 3, "**");
        echo rekenen(2, 3, "***");
        echo rekenen(-2, 3, "+");
        echo rekenen(2, -3, "+");
        echo rekenen(1.5, 3, "+");
        echo rekenen(-2, -3, "+");
        echo rekenen(2, 3.798, "+");

        echo "<h5>Vraag 5.</h5><hr>";

        function tafelVan($getal, $startGetal = 1, $eindGetal = 10)
        {
            if ($startGetal < $eindGetal) {
                $teller = $startGetal;
                while ($teller <= $eindGetal) {
                    $product = $teller * $getal;
                    echo "<p>$teller x $getal = $product</p>";
                    $teller++;
                }
            } else {
                echo "<p>U heeft een groter startgetal dan een eindgetal meegeven, dit mag niet</p>";
            }
        }

        echo tafelVan(5, 1, 5);
        echo tafelVan(12, 8, 5);
        echo tafelVan(8, 5, 12);
        echo tafelVan(6);

        echo "<h5>Vraag 6.</h5><hr>";

        

        function asciiArt() 
        {
            for ($i = 0; $i < 9; $i++) {
                if ($i < 4) {
                    echo str_repeat("&nbsp;", $i) . "x" . str_repeat("&nbsp;", 7 - 2 * $i) . "x<br>";
                }
                if ($i == 5) {
                    echo str_repeat("&nbsp;", $i - 1) . "x<br>";
                }
                if ($i > 5) {
                    echo str_repeat("&nbsp;", 9 - $i) . "x" . str_repeat("&nbsp;", 2 * $i - 11) . "x<br>";
                }
            }
        }

        asciiArt();

        echo "<h5>Vraag 7.</h5><hr>";

        
        function rechthoek($lengte, $breedte)
        {
            if ($lengte < $breedte) {
                return "<p>De lengte $lengte is kleiner dan de breedte $breedte</p>";
            } elseif ($lengte < 0 || $breedte < 0) {
                return "<p>Het zijn negatieve getallen</p>";
            } elseif (!is_int($lengte) || !is_int($breedte)) {
                return "<p>Het zijn geen gehele getallen</p>";
            } else {
                $oppervlakte = $lengte * $breedte;
                return "<p>Het oppervlak is: $oppervlakte</p>";
            }
        }

        echo rechthoek(8, 5);
        echo rechthoek(6, 5);
        echo rechthoek(-4, 5);
        echo rechthoek(4, -5);
        echo rechthoek(2, 5);
        echo rechthoek(2.5, 1);





















    ?>
</body>
</html>