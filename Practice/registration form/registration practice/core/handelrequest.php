<?php

function getRequest(){

    return $_SERVER["REQUEST_METHOD"];
}


function postrequest(){
    if(getRequest()=="POST"){
        return true;
    }
    return false;
}
?>