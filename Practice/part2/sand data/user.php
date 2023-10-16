<?php
// when use the super global POST
//--------------------------------------------------//

// echo "user data";
// echo "<br>";
// echo $_POST['user_name'];
// echo "<br>";
// echo $_POST['user_email'];
// echo "<pre>";
// print_r ($_POST);


// when use the super global GET
//--------------------------------------------------//

// echo "user data";
// echo "<br>";
// echo $_GET['user_name'];
// echo "<br>";
// echo $_GET['user_email'];
// echo "<pre>";
// print_r ($_GET);

// when use the super global $_request بيحل محل الاتنين
//--------------------------------------------------//

// echo "user data";
// echo "<br>";
// echo $_REQUEST['user_name'];
// echo "<br>";
// echo $_REQUEST['user_email'];
// echo "<pre>";
// print_r ($_REQUEST);

// send data with validation

if($_SERVER["REQUEST_METHOD"]=='POST'){
  
    if(strlen($_POST["user_name"]) < 3 ){
         echo "input must be greater than 3 char";
         die();
        
    }elseif(strlen($_POST["user_name"]) > 20 ){
        echo "input must be less than 3 char";
         die();
    }

    if(empty($_POST["user_email"])){
        echo "eamil is empty";
        die();
    }elseif(!filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL)){
         echo "your email not valid";
         die();
    }
        echo $_POST["user_name"];
        echo "<br>";
        echo $_POST["user_email"];
    
       
    
    
}else{
    echo "request not suport";
}

?> 