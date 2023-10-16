<?php

function spreed_operator(int ...$total){
    return array_sum($total);
}

echo spreed_operator(30,70,90,50,60)

?>