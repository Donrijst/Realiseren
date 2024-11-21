<?php

include "../includes/db.php";
include "../includes/header.php";
include "../includes/nav.php";
//SQL query
$sql = "SELECT * FROM tblRiddles";

//execute resultaat
$result = $conn->query($sql);

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

<?php include "../includes/footer.php"; ?>
