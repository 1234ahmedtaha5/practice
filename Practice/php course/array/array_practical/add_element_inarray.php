<?php 

$oldcolor=['red','blue','yellow','black'];

$yellow=$oldcolor[2];
$black=$oldcolor[3];

$oldcolor[2]="green";
$oldcolor[3]="perpel";
$oldcolor[4]="white";
$oldcolor[5]=$yellow;
$oldcolor[6]=$black;

echo "<pre>";

print_r($oldcolor);

?>