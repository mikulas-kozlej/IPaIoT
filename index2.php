<?php
    echo '<h1>getParameters page</h1>';

        $temp = $_GET["temperature"];
        $hum = $_GET["humidity"];

        $file = fopen("sensors.txt", "w") or die("Unable to open file!");
        $text = $temp . ";" . $hum; 
        fwrite($file, $text);
        fclose($file);
?>