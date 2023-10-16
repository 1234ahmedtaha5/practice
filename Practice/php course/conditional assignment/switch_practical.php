<?php 

$colors=['red','white','black','blue','orange'];

$random_color_index=array_rand($colors);

$color=$colors[$random_color_index];

echo $color;

echo "<br>";

switch ($color) {
    case "red":
        echo "Today is red";
        break;
    case "white":
        echo "Today is white";
        break;
    case "black":
        echo "Today is black";
        break;
    case "blue":
        echo "Today is blue";
        break;
    case "orange":
        echo "Today is orangey";
        break;
    default:
        echo "Today is a weekend day";
        break;
}
?>