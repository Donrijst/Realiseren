<?php
    include "../includes/db.php";
    include "../includes/functions.php";
    include "../includes/header.php";
    include "../css/opdracht2_2.css";
    include "../includes/nav.php";

    $query = "SELECT * FROM tblRiddles WHERE Creator <> 'Admin' ";

    $result = $conn->query($query);
?>
    <h2>Uitwerkingen.</h2><br>

    <fieldset>
        <legend>Zoekopdrachten:</legend>
        <i>Tip: Laat een veld leeg, dan zal er niet op gezocht worden.</i>
        <br><br>
            <form action='T4_REA_Oefening2_2.php' method='get'>
            <label for="txtRiddleText">Raadsel:</label>
            <input type="text" name="txtRiddleText">
            <br><br>
            <label for='txtCreator'>Maker:</label>
            <input type='text' name='txtCreator'>
            <br><br>
            <input type='submit' value='Versturen'>
            </form>
    </fieldset>
    <br><br>

    <?php
        echo($query);
        echo "<br>";
        echo "<br>";
    ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>RiddleText</th>
                <th>RiddleAnswer</th>
                <th>Creator</th>
                <th>CreateDate</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    while ($row = $result->fetch()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["Id"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["RiddleText"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["RiddleAnswer"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["Creator"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["CreateDate"]) . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
                </table>
<?php
    include "../includes/footer.php";