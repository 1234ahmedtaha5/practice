<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min">
    <title>Document</title>
</head>
<body>
 <?php
    $colors=["red","white","black","orange"];
    $count=count($colors);
    // echo $count;
    $i=0;
?>

<h1>colors</h1>

<ul>
    <?php while($i <$count): ?>
      <ul> <?php echo $colors[$i]; ?> </ul>
      <?php $i++ ?>
      <?php endwhile ?>
    
</ul>
</body>
</html>