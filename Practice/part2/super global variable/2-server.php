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
    <h1>super global - server</h1>
    <?php
        geturl();
    ?>
    <hr>
    <?php 

       function geturl(){
            echo   $_SERVER["REQUEST_SCHEME"].":/".$_SERVER["HTTP_HOST"].$_SERVER["SCRIPT_NAME"];
       }

      ?>
 <table  class="table table-bordered ">
    <thead>
        <tr>
            <td>
                name
            </td>
            <td>
                value
            </td>
        </tr>
    </thead>
    <tbody>
          <?php foreach($_SERVER as $key => $value): ?>
        <tr>
           
            <td> <?php echo $key ?></td>
            <td><?php echo $value ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
 </table>
</body>
</html>