<?php
session_start();
require_once "core/validation.php";

$user_name=trim(filter_input(INPUT_POST,"user_name",FILTER_SANITIZE_STRING));
$user_email=trim(filter_input(INPUT_POST,"user_email",FILTER_SANITIZE_EMAIL));
$errors=[];

if($_SERVER["REQUEST_METHOD"]=='POST'){
   
    if(InputEmpty($user_name)){
        $errors[]= "name is empty";
    
    }
    elseif( InputLengthMin($user_name,3) ){
         $errors[]= "input must be greater than 3 char";
        
        
    }elseif(InputLengthMax($user_name,20)){
        $errors[]= "input must be less than 20 char";
        
    }
    



    if(InputEmpty($user_email)){
        $errors[]= "eamil is empty";
    
    }elseif(InputEmailValidate($user_email)){
         $errors[]= "your email not valid";
        
    }
       if(empty($errors)){
         $_SESSION["user_name"]=$user_name;
         $_SESSION["user_email"]=$user_email;
         header("location:userprofile.php");

       }
       else{
          $_SESSION["errors"]=$errors;
          header("location:best_validation_form.php");
       }
        echo $user_name;
        echo "<br>";
        echo $user_email;
    
    
    
}else{
    echo "request not suport";
}







?>