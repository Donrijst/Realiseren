<?php
    include "../includes/db.php";
    include "../includes/functions.php";
    include "../includes/header.php";
    include "../css/opdracht2_2.css";
    include "../includes/nav.php";


    #registreer query 
//if (isset($_POST['knopje']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    //$sql = "INSERT INTO `tblriddles` (`RiddleText`, `RiddleAnswer`, `Creator`, `CreateDate`)
            //VALUES (:RiddleText, :RiddleAnswer, :Creator, :CreateDate)";
            //$stmt = $pdo->prepare($sql);
            
            //$data = [
                //$riddletext = $_POST['RiddleText'],
                 //$ $_POST['RiddleAnswer'],
                //"CreateDate" => $_POST['CreateDate'],
                //"Creator" => $_POST['Creator']
            //];
            //$stmt->execute($data);
            //header("."); 
        //}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["knopje"])) {
    $riddletext = $_POST["RiddleText"];
    $riddleanswer = $_POST["RiddleAnswer"];
    $createdate = $_POST["CreateDate"];
    $creator = $_POST["Creator"];

    // Valideer login
    if (executeInsertQuery($riddletext, $riddleanswer, $createdate, $creator)) {
        //als er succesvol is ingelogd dan verwijst het naar de homepagina
        echo "succesvol gestuurd ga naar de resultaten pagina";
    } else {
        echo "Iets te hard getweaked";
    }
}

?>

<h2>Uitwerkingen</h2>

<form method="POST">
    <legend>nieuwe grap toevoegen</legend>
    <label for="RiddleText">Grap Tekst</label>
    <input type="text" name="RiddleText">
    <label for="RiddleAnswer">Grap</label>
    <input type="text" name="RiddleAnswer">
    <label for=CreateDate>Datum</label>
    <input type="datetime" name="CreateDate">
    <label for="Creator">Maker</label>
    <input type="text" name="Creator">

    <input type="submit" name="knopje">
</form>


<?php
    include "../includes/footer.php";