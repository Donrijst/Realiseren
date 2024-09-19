<?php
    //Taak 1 ---------------------------------------------
    //alle onderstreepte woorden uit de tekst in variabelen.\
    
    $type = "Carnaval";
    $duur = 3;
    $dagen = ['zondag', 'maandag', 'dinsdag'];
    $vastentijd = 40;
    $land = "Nederland";
    $provincie = "Noord-Brabant";
    $voedingsmiddelen = ['worstenbrood', 'koffie Schrobbeler'];

    //tekst met de woorden uit de tekst in één $story variabele.
    $story = "{$type} is van oorsprong een gekerstend heidens volksfeest. Het duurt officieel {$duur} dagen, {$dagen[0]}, {$dagen[1]} en {$dagen[2]} direct voorafgaand aan de vastentijd van {$vastentijd} dagen. {$type} is bij uitstek het feest van zotheid, spot en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel {$land} een gebruik om {$type} op carnavalsvrijdag te openen. Op Aswoensdag wordt {$type} afgesloten, maar de tradities verschillen per regio. In het overgrote deel van {$provincie} wordt er afgesloten met {$voedingsmiddelen[0]}, {$voedingsmiddelen[1]}soms met een koffietafel.";


    //Taak 2 --------------------------------------------------
    //maak voor 3 bonnen variabelen aan
    $bon1 = 34.99;
    $bon2 = 45.76;
    $bon3 = 78.34;

    $totaal = $bon1+$bon2+$bon3;

    $kostenpp = ($totaal) / 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test der Testen</title>
    <link rel="stylesheet" href="../includes/style.css">
</head>


<body>
    <?php
        echo '<div class="header">' . 
        "<h1>Uitwerking van PHP-oefeningen</h1>" .
        "</div>" .

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
    
                    "<li>" .
                        "<h2> Hoofdstuk 3</h2>" .
                            "<ul>" .
                                "<li><a href='../T3_REA3/T3_REA_Oefening_3_1.php'>Oefening 3.1</a></li>" .
                            "</ul>" .
                    "</li>" .
                "</ul>" .
            "</div>" .  

            //pakt de tekst uit de $story variabele in een p element
            '<div class="content">' .
                '<br>' .
                    '<h2>Uitwerking oefening 3.1</h2>' .
                '<br>' .
                    '<h3>Taak 1--------------</h3>' .
                    "<p>{$story}</p>" .
                '<br>' .
                    '<h3>Taak 2--------------</h3>' .
                '<br>' .
                    "<p>Totale kosten: {$totaal}</p>" .
                    "<p>Kosten per persoon: {$kostenpp}</p>" .
            "</div>" .
        "</main>";
    ?>
</body>

</html>
