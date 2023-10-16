<?php 

$text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aliquid esse nihil iure ea at, laboriosam dicta consectetur excepturi numquam voluptatem perferendis quibusdam modi est libero cumque, tenetur soluta facilis";

$string_length=strlen($text);
$sub_of_string=substr($text,rand(0,$string_length));

echo $sub_of_string;




?>