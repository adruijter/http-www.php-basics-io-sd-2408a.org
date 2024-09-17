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

    echo "<p>In mijn top 5 van snoep zit $snoep[6]</p>";

    echo "<p>Mijn top 7 snoeplijst</p>";
    echo "<p>==================</p>";
    echo "<ol>";
    foreach ($snoep as $item) {
        echo "<li>$item</li>";
    }
    echo "</ol>";
    


?>

</body>
</html>