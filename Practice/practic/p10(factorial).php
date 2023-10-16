<?php

function getfactorial(int $number):int{
    $result=1;
    for($i=$number;$i>=1;$i--){
        $result=$result*$i;
    }
    return $result;
}

echo getfactorial(7);


?>