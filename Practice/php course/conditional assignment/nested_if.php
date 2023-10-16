<?php 

// number event , <50


$number=rand(0,100);
echo $number;
echo "<br>";
if($number%2==0){
     if($number < 50){
        echo "number even and less than 50";
     }
     else{
        echo "number is event";
     }

}else
{
    echo "number is odd";
}


?>