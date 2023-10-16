<?php 

$number1=rand(1,100);
$number2=rand(1,100);

$operators=["-","+","*","/"];

$operator=$operators[rand(0,3)];


echo $number1;
echo "<br>";
echo $number2;
echo "<br>";
echo $operator;
echo "<br>";

if($operator=="+"){
    echo "the sum of two number is:  " . ($number1 + $number2);
}elseif($operator=="-"){
    echo "the sub of two number is:  " . ($number1 - $number2);
}
elseif($operator=="*"){
    echo "the multiblication of two number is:  " . ($number1 * $number2);
}
elseif($operator=="/"){
    echo "the division of two number is:  " . ($number1 / $number2);
}


?>