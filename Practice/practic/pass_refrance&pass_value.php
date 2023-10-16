<?php


// pass by value 


function colorfill($color){

    $color="green";

    echo "this color is $color";
}


$color="red";

colorfill($color);

echo "<br>";

echo $color;
echo "<br>";


// pass by refrance

function colorfill2(&$color){

    $color="green";

    echo "this color is $color";
}


$color="red";

colorfill2($color);

echo "<br>";

echo $color;