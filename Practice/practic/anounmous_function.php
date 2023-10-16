<?php
// anonumous function   عبارة عن فانكشن مجهولة  

$number=[30,50,80,120,330];

$new_array= array_map(function($price){
  
   if($price>60){
    return $price+10;
   }else
   {
    return $price;
   }

},$number);


echo "<pre>";
print_r($new_array);
?>