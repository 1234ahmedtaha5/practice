<?php

// Globals

//syntax

//$GLOBALS


$x=50;


function getx(){
    $GLOBALS['x']=100;
    echo $GLOBALS['x'];
}


getx();
echo "<br>";
echo $x;



?>