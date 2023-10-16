<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic array</title>
</head>
<body>
<?php 

$colors=['red','blue','yellow',25,true];

?>

<h1>
    <?php 
      foreach($colors as $color )
       {
         echo "<pre>";
         print_r($color) ;
       }
    ?>
</h1>
    
</body>
</html>