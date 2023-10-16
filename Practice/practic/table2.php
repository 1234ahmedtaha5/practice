<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $users =[
        ["name"=>"ahmed","email"=>"ahmed@gmail.com"],
        ["name"=>"mohamed","email"=>"mohmaed@gmail.com"]
    ]
    ?>
    <table>
        <thead>
            <tr>
               <th>name</th>
               <th>email</th>
            </tr>
        </thead>
        <tbody> 
               <?php for($i=0;$i<=count($users);$i++): ?>
             <tr>
                <?php foreach($users[$i] as $key=>$value): ?>
                <td> <?php echo $value ; ?> </td>
                <?php endforeach; ?>
             </tr>
              <?php endfor; ?>

        </tbody>
</table>
    
</body>
</html>
