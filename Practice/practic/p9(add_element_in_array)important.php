<?php

$original_array=[1,2,3,4,5,7,8,9];



function  AddElement($array,$element,$index){
    $NewArray=[];
    foreach($array as $key=>$value){
        if($index==$key){
            
            $NewArray[$index]=$element;;
        }
        $NewArray[]=$value;

    }
    return $NewArray;
}

echo "<pre>";
print_r (AddElement($original_array,10,7));


?>