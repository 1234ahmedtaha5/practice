<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <?php
    $page_title = "user information";
    ?>
    <title><?php echo $page_title; ?></title>
</head>

<body>
    <?php 
    $name="ahmed taha";
    $email="ahmed@gmail.com";
    $phone="01113786848";
    
    ?>
    <h5>user information</h5>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $name;?></h5>
                        <p class="card-text"><?php echo $email;?></p>
                        <p class="card-text"><?php echo $phone;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>