<?php
    echo '<h1>getParameters page</h1>';

        $temp = $_GET["temperature"];
        $hum = $_GET["humidity"];
        $is_open = $_GET["is_open";]

        $file = fopen("sensors.txt", "w") or die("Unable to open file!");
        $text = $temp . ";" . $hum .";" . $is_open; 
        fwrite($file, $text);
        fclose($file);
?>