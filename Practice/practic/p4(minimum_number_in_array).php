<?php
// function to get the minimum number in array
$arrayn=[8,9,6,2,7,6,10,6,4,-5,-10,-20,-4,7,1,0,5,1];




function minNumber(array $arrayn){

   if(!empty($arrayn)){
    $minimumnumber=$arrayn[0];
    foreach($arrayn as $value){
        if($minimumnumber>$value){
            $minimumnumber=$value;
        }  
    }
         return  $minimumnumber;
    }else {
       return "array is empty";
   }
}

echo minNumber($arrayn);


?>