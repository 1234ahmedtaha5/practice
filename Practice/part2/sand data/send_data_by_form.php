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
    <h1>send data from form</h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto p2">
               <form action="user.php" method="post" >
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