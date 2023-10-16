<?php

$file=fopen("data.txt","a+");

fwrite($file,"web developer (php+laravel)\n");

fclose($file);

?>