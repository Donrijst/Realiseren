<?php

    // Is er een POST value "txtUsername" opgegeven?
    if( isset($_POST["txtUsername"]) == true)
    {
        $newAmount = $_COOKIE["userCountCookie"] + 1;
        setcookie("userCountCookie", $newAmount, time() + 3600 * 24 * 365, "/");
    }
    else
    {
        echo "<p>Je bent vergeten een username op te geven. Ga terug!</p>";
        header("oefening6.1.php");
    }

    // Is er een POST value "selCountry" opgegeven?
    if( isset($_POST["selCountry"]) == true)
    {
        //  Opdracht 2: Programmeer hieronder (via cookieset) een cookie met de volgende eisen:
        //   Expiration date: over 356 dagen (1 jaar)
        //   Naam: userCountryCode
        //   Value: $_POST["selCountry"]
		//   Path: "/"
    }
    else
    {
        echo "<p>Je bent vergeten een land op te geven. Ga terug!</p>";
        header("oefening6.1.php");
    }

    // Stuur een gebruiker door naar de index pagina!
    // header("Location: /T3_REA_Oefeningen/index.php");

?>