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


        echo "<hr>2.";

        



    ?>
</body>
</html>