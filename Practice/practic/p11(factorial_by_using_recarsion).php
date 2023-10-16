<?php

function getfactorial(int $number):int{
 
    if($number==1){
        return 1;
    }
    return $number * getfactorial($number-1);
   
    
}

echo getfactorial(7);



?>