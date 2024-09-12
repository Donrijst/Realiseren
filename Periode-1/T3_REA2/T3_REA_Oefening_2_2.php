<!DOCTYPE html>
<!--html blok buiten het php blok -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uitwerking</title>
    <link rel="stylesheet" href="../style.css">
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
                        '<li><a href="#">Oefening 2.1</a></li>' .
                        '<li><a href="..">Oefening 2.2</a></li>' .
                    "</li>" .
                "</ul>" .
            "</div>" .

        //inhoud van artikel / paragraaf / tekst
        //elementen h2, img en p minimaal 1 keer voorkomen.
            '<div class="content">' .
                '<h2>Uitwerking oefening 2.2 - Intercontinental Ballistic Missile Gambit</h2>' .
                '<img src="icbm.png"></img>' .
                '<p>De pion van de koning naar e4 en zwart antwoordt met d5, wat de Scandinavische verdediging is. Dit is alleen mogelijk met deze opening. We zullen ons geen zorgen maken over die pion en spelen Nf3. Omdat zwart hebzuchtig is, zal hij de pion nemen omdat hij onbeschermd is en tegelijk het paard aanvallen. We spelen ons paard naar f5, redden het stuk en vallen de pion aan. Om de hangende pion te verdedigen, zal de meest logische zet voor zwart zijn om zijn paard te ontwikkelen en de pion te beschermen. Zwart speelt paard naar f6. Nu moeten we een andere pion offeren, dus we zetten onze damepion naar d3. Zwart zal de pion nemen omdat zijn pion wordt aangevallen. Nu ontwikkelen we onze loper naar d3. Op dit punt heb je het spel eigenlijk al gewonnen. Zwart speelt pion naar h6 om het paard aan te vallen. Wat wij doen, is dat we het veld f7 aanvallen met het paard, waardoor we de dame en toren vorken. Zwart heeft geen andere optie dan de koning naar f7 te spelen, waardoor het paard wordt gedood en de dame en toren worden beschermd. Nu brengen we de loper naar g6, wat schaak geeft en de hele rij aanvalt. Zwart kan zijn koning niet terugtrekken en heeft als enige optie om de loper te doden, waardoor de dame blootgesteld raakt.

Klaar. Het spel van zwart is voorbij.

WIJ KUNNEN EEN RT-2PM2 <<TOPOL-M>>CODE DRIE-TRAPS VASTE BRANDSTOF SILO-GEBASEERDE INTERCONTINENTALE BALLISTISCHE RAKET LANCEREN OM DE OVERGEVEBEN STUKKEN VAN ZWART AAN TE VALLEN.

MAAR ALS JE EEN BEGINNER BENT, KUN JE EEN BGM-71 TOW ANTI-TANKRAKET LANCEREN VANUIT EEN M-3 BRADLEY CAVALERIE GEVECHTSVOERTUIG OP RUPSBANDEN.

NU VOORZICHTIG MANOEUVREREN, WANT ONZE ATGM GAAT OVER HET BORD.

DUS, DIT BETEKENT IN WEZEN DAT NA KONING NEEMT LOPER, ONZE DAME HUN DAME NEEMT.</p>' .
            '</div>' .
        '</main>';
    ?>

</body>
</html>
