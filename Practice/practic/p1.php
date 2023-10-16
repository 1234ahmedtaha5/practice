<?php

$sum=0;
$start=rand(1,10);
$end=rand(20,30);
for($i=$start;$i<=$end;$i++){
    if($i%2==0){
         $sum=$sum+$i;
         print_r($i);
         echo "<br>";
    }
}
echo $sum;

?>