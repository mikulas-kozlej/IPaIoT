<?php
    $fname = $_GET["fname"];
    $lname = $_GET["lname"];
    $date = $_GET["date"];
    $email = $_GET["email"];
    $fnum = $_GET["fnum"];
    $pnum = $_GET["pnum"];

    $file = fopen("form_output", "w") or die("Unable to open file!");
    $text = $fname . "\n" . $lname . "\n" . $date . "\n" . $email . "\n" . $fnum . "\n" . $pnum;
    fwrite($file, $text);
    fclose($file);
    echo 'Welcome ' . $fname . " " . $lname;
?>