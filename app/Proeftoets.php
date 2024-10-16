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
    <h5>Vraag 1</h5><hr>

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


        echo "<h5>Vraag 2.</h5><hr>";

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


        echo "<h5>Vraag 3.</h5><hr>";

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
                        return 'U heeft een onbekende bewerking gegeven, probeer het opnieuw';
    
                }
            } else {
                return 'Error! Geef gehele getallen op groter dan 0';
            }
        }

        echo rekenen(3, 8, "+");
        echo rekenen(1, 5, "*");
        echo rekenen(10, 20, "/");
        echo rekenen(2, 3, "**");
        echo rekenen(2, 3, "***");





















    ?>
</body>
</html>