<?php
    echo '<h1>getParameters page</h1>';

        $sn1 = $_GET["temperature"];
        $sn2 = $_GET["humidity"];

        $file = fopen("sensors.txt", "w") or die("Unable to open file!");
        $text = $sn1 . ";" . $sn2;
        fwrite($file, $text);
        fclose($file);
        

?>