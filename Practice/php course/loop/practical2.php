<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table" >
  <thead>
    <tr>
      <th scope="col">number</th>
      <th scope="col">discribtion</th>
    </tr>
  </thead>
  <tbody>
        <?php for($i=1;$i<=50;$i++):?>
    <tr>
      <td><?php echo $i;?></td>
      <td>
        <?php 
          if($i%2==0){
            echo $i ."is even";
          }else{
            echo $i."is odd";
          }
        
        ?>
      </td>

      <?php endfor ?>
     
    </tr>
    
    
  </tbody>
</table>



<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>