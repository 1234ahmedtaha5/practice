<?php 
// معرفة عدد مرات تكرار كلمة احمد
$text="Lorem ipsum ahmed dolor sit amet consectetur adipisicing elit. Cum aliquid esse nihil iure ea at, laboriosam ahmed dicta consectetur excepturi ahmed numquam voluptatem perferendis ahmed quibusdam modi est libero cumque, tenetur soluta facilis";


$string_length=strlen($text);

$new_string=str_replace("ahmed","",$text);

$string_length_after_removing=strlen($new_string);

$words_length=$string_length-$string_length_after_removing;

$word_length=strlen("ahmed");

$count_of_word=$words_length/$word_length;

echo $count_of_word;



?>