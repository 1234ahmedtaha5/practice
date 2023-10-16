<?php 
$oldcolor=['red','blue','yellow'];
$newcolor=['black','green'];


$count= count($oldcolor);

$oldcolor[$count]="$newcolor[0]";
$oldcolor[$count+1]="$newcolor[1]";


echo"<pre>";

print_r($oldcolor);

?>