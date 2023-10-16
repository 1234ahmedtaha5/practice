<?php

// convert from array to json
$student=[
    "name"=>"ahmed taha",
    "email"=>"ahmed@gmail.com",
    "gender"=>"male"
];

$student_json=json_encode($student);

echo "<pre>";
print_r($student_json);


echo"<br>";
echo"<br>";
echo"<br>";
// convert from json to array
$strudent_array=json_decode($student_json,true);

echo "<pre>";
print_r($strudent_array);


?>