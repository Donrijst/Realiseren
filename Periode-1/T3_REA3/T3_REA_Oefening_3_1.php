<?php
    //alle onderstreepte woorden uit de tekst in variabelen.\
    
    $type = "Carnaval";
    $duur = 3;
    $dagen = ['zondag', 'maandag', 'dinsdag'];
    $vastentijd = 40;
    $land = "Nederland";
    $provincie = "Noord-Brabant";
    $voedingsmiddelen = ['worstenbrood', 'koffie Schrobbeler'];

    $story = "{$type} is van oorsprong een gekerstend heidens volksfeest. Het duurt officieel {$duur} dagen, {$dagen[0]}, {$dagen[1]} en {$dagen[2]} direct voorafgaand aan de vastentijd van {$vastentijd} dagen. {$type} is bij uitstek het feest van zotheid, spot en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel {$land} een gebruik om {$type} op carnavalsvrijdag te openen. Op Aswoensdag wordt {$type} afgesloten, maar de tradities verschillen per regio. In het overgrote deel van {$provincie} wordt er afgesloten met {$voedingsmiddelen[0]}, {$voedingsmiddelen[1]}soms met een koffietafel.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>


<body>
    <?php
    //header
    echo '<div class="header">' . 
        "<h1>Uitwerking van PHP-oefeningen</h1>" .
    "</div>" .

    //navbar
    "<main>" .
        '<div class="nav">' .
            "<h2>Thema 3</h2>" .

            "<ul>" .
                "<li>" .
                    "<h2> Hoofdstuk 2</h2>" .
                        "<ul>" .
                            "<li><a href='../T3_REA2/T3_REA_Oefening_2_2.php'>Oefening 2.2</a></li>" .
                        "</ul>" .
                "</li>" .
            "</ul>" .
        "</div>" .

        '<div class="content">' .
            '<br>' .
                '<h2>Uitwerking oefening 2.</h2>' .
            '<br>' .
            "<p>{$story}</p>" .
        "</div>" .
    "</main>";
    ?>
</body>

</html>
