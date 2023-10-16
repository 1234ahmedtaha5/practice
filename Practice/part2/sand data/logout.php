<?php

session_start();
session_destroy();
header("location:best_validation_form.php");
die();

?>