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
    $voornaam = 'Arjan';

    $tussenvoegsel = "de";

    $achternaam = "Ruijter";

    echo "<p>Mijn naam is $voornaam $tussenvoegsel $achternaam</p>";
    
    echo '<p>Mijn naam is ' . $voornaam . ' ' . $tussenvoegsel . ' ' . $achternaam . '</p>';

?>

    <a href="../index.html">Terug</a>
</body>
</html>