<?php
    $animals = array("Cat","Dog","Bird");
    echo $arrLength = count($animals), "<br />";
    for($x = 0; $x < $arrLength; $x++){
        echo $x, "." $animals[$x],"<br />";
    }
?>