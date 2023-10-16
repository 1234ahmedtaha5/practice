<?php

// connection with file system

$file=fopen("data.txt","r+");

// $file_size=filesize("data.txt");

// $file_reading=fread($file,$file_size);





while(($row=fgets($file)) !=false){
    echo $row."<br>";
}
?>