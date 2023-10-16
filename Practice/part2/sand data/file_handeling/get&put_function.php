<?php

//get data 
$ahmed_data=file_get_contents("ahmed.txt");

echo $ahmed_data;

//put data
file_put_contents("ahmed.txt","egyption academy for engineering \n",FILE_APPEND);
?>