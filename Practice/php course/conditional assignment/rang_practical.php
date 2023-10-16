<?php 

$text="Lorem ipsum ahmed dolor sit amet consectetur adipisicing elit. Cum aliquid esse nihil iure ea at, laboriosam ahmed dicta consectetur excepturi ahmed numquam voluptatem perferendis ahmed quibusdam modi est libero cumque, tenetur soluta facilis";

$start=rand(0,40);
$end=rand(1,40);
$new_string=substr($text,$start,$end);

echo $new_string;



?>