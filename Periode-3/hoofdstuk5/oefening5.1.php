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
            include "../includes/header.php";
            include "../includes/nav.php";
?>
            <h2>Oefening 5.1</h2>
            <br>
                <form action="oefening5.1-resultaat.php" method="GET">
                    <label for="naam">Voor en achternaam</label>
                    <input type="text" id="naam" name="naam">
        
                    <label for="studentnummer">Studentennummer</label>
                    <input type="text" id="studentnummer" name="studentnummer">
        
                    <label for="uitschrijving">Datum van uitschrijving</label>
                    <input type="date" id="uitschrijving" name="uitschrijving">
        
                    <label for="reden">Reden van uitschrijving</label>
                    <select id="reden" name="reden">
                        <option value="verkeerd">Verkeerde keuze</option>
                        <option value="andere_studie">Andere studie</option>
                        <option value="werk">Werk</option>
                        <option value="verhuizing">Verhuizing</option>
                    </select>
        
                    <label>Leerjaar</label>
                    <input type="radio" id="leerjaar1" name="leerjaar" value="1ste jaar">
                    <label for="jaar1">1e leerjaar</label>
                    <input type="radio" id="leerjaar2" name="leerjaar" value="2de jaar">
                    <label for="jaar2">2e leerjaar</label>
                    <input type="radio" id="leerjaar3" name="leerjaar" value="3de jaar">
                    <label for="jaar3">3e leerjaar</label>
        
                    <input type="checkbox" id="overgaan" name="overgaan">
                    <label for="overgaan">Ik wil me aanmelden bij de succesklas</label>
        
                    <input type="checkbox" id="verwijder" name="verwijder">
                    <label for="verwijder">Verwijder mijn gegevens uit het systeem</label>
        
                    <label for="reden">Geef hieronder de reden van je uitschrijving op</label>
                    <textarea id="reden" name="reden"></textarea>
        
                    <input type="submit" value="klaar">
                </form>       

        <?php
            include "../includes/footer.php";
        ?>