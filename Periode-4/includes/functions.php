<?php

function executeInsertQuery($riddletext) {
    $stmt = $conn->prepare("INSERT INTO tblriddles WHERE `RiddleText`, `RiddleAnswer`, `Creator`, `CreateDate`)");
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':inlognaam', $username); //verbind variabele met de data die is gegeven
            $stmt->bindParam(':password', $password);
            $stmt->execute();
}
