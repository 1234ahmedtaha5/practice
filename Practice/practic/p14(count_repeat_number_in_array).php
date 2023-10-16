<?php

$numbers=[1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,8,1,1,1,5,5,5,7,9,8,99,99,4,6,1,2,3,1,2,4,5];


function GetCountOfNumberOfArray($array,$number){
     
    $arraylength=count($array);
    
    $count=0;
    for($i=0;$i<$arraylength;$i++){
        if($array[$i]==$number){
            $count++;
        }
    }
    return $count;
}

echo GetCountOfNumberOfArray($numbers,88);

?>