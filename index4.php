<?php
    $fridge = $_GET["fridge"];

    $file = fopen("form_output.txt", "w") or die("Unable to open file!");
    $text = $fridge;
    fwrite($file, $text);
    fclose($file);
?>