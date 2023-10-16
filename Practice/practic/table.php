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
        $products=[
            "name"=>"T-shirt",
            "price"=> 500,
            "offer"=>10,
            "stock"=>"available"
        ]
    ?>

    <table>
        <thead>
            <tr>
                <td>name</td>
                <td>price</td>
                <td>offer</td>
                <td>stock</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php foreach($products as $key=>$value): ?>
                <td><?php echo $value; ?> </td>
                 <?php endforeach;  ?>
            </tr>
                
        </tbody>
    </table>
    
</body>
</html>