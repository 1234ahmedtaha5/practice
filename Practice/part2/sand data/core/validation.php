<?php

function InputLengthMin($input,$length){
    if(strlen($input) < $length){
          return True;
    }
        return false;
}

function InputLengthMax($input,$length){
    if(strlen($input) > $length){
          return True;
    }
        return false;
}

function InputEmpty($input){
    if(empty($input)){
        return true;
    }
    return false;
}

function InputEmailValidate($input){
    if(!filter_var($input,FILTER_VALIDATE_EMAIL)){
        return true;
    }
        return false;
}

?>
