<?php
$colors=["red","white","black","green","red","white","red","green","red","red"];


foreach($colors as $value){
    $count=0;
    foreach($colors as $index=>$color){
        if($value==$color){
            $count++;
            if($count >1){
                unset($colors[$index]);
            }
        }
    }
    
}

echo "<pre>";
print_r($colors)
?>