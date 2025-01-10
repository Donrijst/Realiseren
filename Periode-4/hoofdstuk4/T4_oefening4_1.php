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
        $query = "SELECT * FROM tblRiddles WHERE Id <> 'Creadate' ";

        $result = $conn->query($query);
?>

<h2>Uitwerkingen</h2>

<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>RiddleText</th>
                <th>RiddleAnswer</th>
                <th>Creator</th>
                <th>CreateDate</th>
                <th>update</th>
                <th>delete</th>
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
                        echo '<td><a class="btn_update" href="../website/update.php?id=' . $row['Id'] . '">Edit</a></td>';
                        echo '<td><a class="btn_delete" href="../includes/delete.php?id=' . $row['Id'] . '">Delete</a></td>';
                        echo "</tr>";
                    }
                ?>
            </tbody>
                </table>


<?php
    include "../includes/footer.php";