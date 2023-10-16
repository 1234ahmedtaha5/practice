<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<table class="table table-bordered ">
    <thead>
        <tr>
            <?php for($i=1;$i<=10;$i++): ?>
            <td><?php echo $i;  ?> </td>
            <?php endfor; ?>
        </tr>
    </thead>
    <tbody>
        <?php for($i=1;$i<=10;$i++):  ?>
        <tr>
        <?php for($j=1;$j<=10;$j++):  ?>
           <td class="<?php if($i==$j):echo "bg-success"; endif ?>">
              
           <?php echo $i * $j ;  ?>
           </td>
           <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </tbody>

</table>
    
</body>
</html>