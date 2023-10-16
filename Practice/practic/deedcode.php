<?php

function operation($n1,$n2){

    if($n1>$n2){
        return $n1+$n2;
    }

    return $n1 * $n2; // dead code  اى حاجه بعد الريتيرن مش بتتنفذ
}

echo operation(3,5);

?>