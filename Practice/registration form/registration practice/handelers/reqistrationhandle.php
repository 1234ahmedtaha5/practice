<?php

include "../core/validation.php";
include "../core/handelrequest.php";


if(postrequest()){
    echo "post";
}else{
    echo "request not valid";
}

?>