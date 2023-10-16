<?php

/*$string="eraasoft";

$length=strlen($string);

for($i=$length;$i>=0;$i--){
    echo $string[$i];
   
}*/

function rev(string $str)
{
    $length=strlen($str)-1;
    $revstr="";
    for($i=$length;$i>=0;$i--){
        $revstr.= $str[$i];
       
    }
    return $revstr;
}

echo rev("ahmed");
?>
