<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
   
  
    <title>Hello, world!</title>
</head>

<body>

   <?php 
   
   $oldcolor=['red','blue','yellow','black'];

   
   ?>
    <button type="button" class="btn btn-primary position-relative">
        Inbox
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <?php echo count($oldcolor);?> +
            <span class="visually-hidden">unread messages</span>
        </span>
    </button>

    <?php 
    $newarray= array_reverse($oldcolor);
    echo "<pre>";
    print_r($oldcolor) ;
    echo "<hr>";
 
    echo "<pre>";
    print_r($newarray) ;
    echo "<hr>";
    ?>

    

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>