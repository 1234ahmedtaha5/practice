<?php 

// data type (object)

class user{

}

$clint= new user;

echo gettype($clint);

// data type resource --> refare to source file out the php 


$file=fopen("data.text","r");
echo gettype($file);

?>