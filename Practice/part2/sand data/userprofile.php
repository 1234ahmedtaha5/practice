<?php
session_start();
if(!isset($_SESSION["user_name"])){
    header("location:best_validation_form.php");
    die;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>send data from form</title>
</head>
<body>
    <h1>user profile</h1>

    



    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto p2">
               
            <div>
                <h1 >welcome</h1>
            </div>
            <div class="border">
               <h3><?php  echo "name".":". $_SESSION["user_name"] ; ?></h3> 
                <?php echo "<br>"  ?>
                <h3> <?php  echo "email".":". $_SESSION["user_email"] ; ?>  </h3>
            </div>
            <div class="border">
                 <a href="logout.php" class="btn btn-info">logout</a>
            </div>


               
               
            </div>
        </div>
        

     </div>
    
</body>
</html>