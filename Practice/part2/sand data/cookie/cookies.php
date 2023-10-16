<?php

//set data in cookie

setcookie("name","ahmed",time()+3,"/");

// get data from cookie
if(isset($_COOKIE["name"])){
     echo $_COOKIE["name"];    
}

//delete cookie

setcookie("name","ahmed",time()-3,"/");
?>