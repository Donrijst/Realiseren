<?php
    echo '<div class="header">' . 
    "<h1>Uitwerking van PHP-oefeningen</h1>" .
    "</div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uitwerkingen</title>
    <link rel="stylesheet" href="../includes/style.css">
</head>

<style>
    body {
    display: flex;
    flex-direction: column;
    font-family:'Courier New', Courier, monospace;
}

/*----Styling pagina---*/
.header {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 150px;
    width: 100%;
    background-color: lightblue;
}

.main {
    display: flex;
    flex-direction: row;
}

.nav {
    display: flex;
    width: 25%;
    height: auto;
    background-color: antiquewhite;
    align-content: center;
    padding: 10px;
}

.content {
    display: flex;
    width: 75%;
    height: auto;
    flex-direction: column;
    padding: 10px;
}

h3 {
    margin: 15px;
}
</style>
