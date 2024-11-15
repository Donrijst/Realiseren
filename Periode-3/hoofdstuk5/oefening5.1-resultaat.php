<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $naam = $_GET['naam'];
        $studentnummer = $_GET['studentnummer'];
        $uitschrijving = $_GET['uitschrijving'];
        $reden = $_GET['reden'];
        $reden = $_GET['reden'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../includes/style.css">
</head>
<body>
<header>
        <?php
            include "../includes/header.php";
        ?>
    </header>

    <main>
        <?php
            include "../includes/nav.php";
                
        ?>

        <div class="content">
            <h2> Uitwerking 5.1 Resultaat</h2>
            <br>
                <?php
                    echo "Naam: {$naam}" . "<br><br>";
                    
                    echo "Studentnummer: {$studentnummer}" . "<br><br>";

                    echo "Datum van uitschrijving: {$uitschrijving}" . "<br><br>";

                    if (isset($_GET['overgaan'])) {
                        echo "aanmelden bij succesklas" . "<br><br>";
                    } else {
                        echo "niet aanmelden bij succesklas" . "<br><br>";
                    }

                    if (isset($_GET['verwijder'])) {
                        echo "verwijder mijn gegevens uit het systeem" . "<br><br>";
                    } else {
                        echo "bewaar mijn gegevens" . "<br><br>";
                    }
                    
                    if (isset($_GET['leerjaar'])) {
                        $leerjaar = $_GET['leerjaar'];
                    
                        
                        echo "Leerjaar: {$leerjaar}" . "<br><br>";
                    }

                    echo "Reden: {$reden}"
                ?>
        </div>
    </main>

    <footer>
        <?php
            include "../includes/footer.php";
        ?>
    </footer>
</body>
</html>