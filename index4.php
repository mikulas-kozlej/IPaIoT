<?php
    $fname = $_GET["fname"];
    $lname = $_GET["lname"];
    $lname = $_GET["date"];
    $lname = $_GET["email"];
    $lname = $_GET["fnum"];
    $lname = $_GET["pnum"];

    $file = fopen("form_output", "w") or die("Unable to open file!");
    $text = $fname . "\n" . $lname . "\n" . $date . "\n" . $email . "\n" . $fnum . "\n" . $pnum;
    fwrite($file, $text);
    fclose($file);
    echo 'Welcome ' . $fname . " " . $lname;
?>