<?php
session_start();
unset($_SESSION["user_name"]);
unset($_SESSION["user_email"]);

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
    <h1>Best validation data from form</h1>

    



    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto p2">

          <?php if(isset($_SESSION['errors'])):      ?>
            <?php foreach($_SESSION["errors"] as $error): ?>
               <div class="alert alert-danger text-center"> 

                     <?php echo $error;  ?>
          
            </div>
            <?php endforeach;
               
               unset($_SESSION["errors"] );
                endif;
            ?>


               <form action="best_validation_user.php" method="post" >
                  <div class="mb-3">
                    <input type="text" name="user_name" placeholder="enter your name" class="form-control">
                  </div>
                  <div class="mb-3">
                    <input type="text" name="user_email" placeholder="enter your email" class="form-control">
                  </div>
                  <div class="mb-3">
                    <input type="submit"   class="form-control btn btn-success">
                  </div>

               </form>
               
            </div>
        </div>
        

     </div>
    
</body>
</html>