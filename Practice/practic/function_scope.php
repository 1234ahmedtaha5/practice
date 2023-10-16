<?php

$tax=50;

function orter(int $total){
    global $tax;
    if($total>200){
       return $tax=20;
    }
}

echo $tax;
echo "<br>";
echo orter(350);


?>