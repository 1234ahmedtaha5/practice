<?php

$file=fopen("data.txt","a+");
// copy
// copy("data.txt","new-data.txt");


// move

copy("data.txt","new-data2.txt");
unlink("data.txt");

//delete
unlink("new-data2.txt");

//rename
rename("new-data.txt","ahmed.txt");


?>