<?php


//echo ord("")  ; 97 -122


function checkstring(string $string){
    $stringlength=strlen($string);
    for($i=0;$i<$stringlength;$i++){
      if(ord($string[$i]) <97 || ord($string[$i])>122){
        return false;
      }
   }
   return true;
}

if(checkstring("AHMED")){
    echo "string is lower";
}else{
    echo "string is capital";
}

?>