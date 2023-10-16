<?php 

$array=['red','blue','yellow','black','ahmed',"taha","25",30,50,60];

$array_count= count($array);

$random_element= rand(0,($array_count)-1);

echo $array[$random_element];

?>