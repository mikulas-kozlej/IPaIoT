<?php
    echo '<h1>getParameters page</h1>';

        $sn1 = $_GET["a"];
        $sn2 = $_GET["b"];

        $text = "a=" . $sn1 . " b=" . $sn2;
        $distsq = $sn1 * $sn1 + $sn2 *  $sn2;

        echo $text;
        echo "<br>";
        echo "Distance squared:" . $distsq;

?>