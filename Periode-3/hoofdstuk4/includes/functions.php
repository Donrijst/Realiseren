<?php


    function CheckTrafficLight($trafficLightColor, $ambulance) {
                
        //ambulance check
        if (!$ambulance) {
            if ($trafficLightColor == "rood" || $trafficLightColor == "oranje") {
                echo "Stop!" . $trafficLightColor . ".<br>";
            } else {
                echo "Groen.<br>";
            }
        } else {
            echo "Stop! ambulance<br>";
        }
    }

    CheckTrafficLight("rood", false);
    CheckTrafficLight("groen", true);
?>
    