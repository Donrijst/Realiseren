<!DOCTYPE html>
<!--html blok buiten het php blok -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uitwerking</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <?php
        //elementen van html UI in één echo

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
                        '<li a href="#">Oefening 2.1</li>' .
                        '<li a href="#">Oefening 2.2</li>' .
                    "</li>" .
                "</ul>" .
            "</div>" .

        //inhoud van artikel / paragraaf / tekst
        //elementen h2, img en p minimaal 1 keer voorkomen.
            '<div class="content">' .
                '<h2>Uitwerking oefening 2.2</h2>' .
                '<p>' .
            '</div>' .
        '</main>';
    ?>

</body>
</html>
