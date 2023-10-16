<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>


    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto bg-light my-5 border border-dark border-3">
                <h1 class=" p-2 mt-3"> Sign Up</h1>
                <div class="mb-5">
                    <span>It's quick and easy.</span>
                </div>

                <form action="handelers/reqistrationhandle.php" method="POST">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="confirm_password" name="confirm_pass" id="confirm-password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name=""  class="form-control btn btn-success">
                    </div>

                </form>
            </div>
        </div>
    </div>


  </body>
</html>