<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['fullname'];
        $studentnummer = $_POST['studentnummer'];
        $uitschrijving = $_POST['uitschrijving'];
        $reden = $_POST['reden'];
        $leerjaar = $_POST['leerjaar'];
        $overgaan = $_POST['overgaan'];
        $verwijder = $_POST['verwijder'];
        $reden = $_POST['reden'];
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
                echo "<p>Naam: $fullname</p>";
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