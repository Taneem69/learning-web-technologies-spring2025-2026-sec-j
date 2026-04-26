<?php

    session_start();


    $products=[
        ["ID"=>1, "Name"=>"Chips", "Price"=>30, "Quantity"=>100],
        ["ID"=>2, "Name"=>"Juice", "Price"=>30, "Quantity"=>100],
        ["ID"=>3, "Name"=>"Coke", "Price"=>30, "Quantity"=>100],
        ["ID"=>4, "Name"=>"Sprite", "Price"=>30, "Quantity"=>100],
        ["ID"=>5, "Name"=>"Noodles", "Price"=>30, "Quantity"=>100],
        ["ID"=>6, "Name"=>"Chocolate", "Price"=>30, "Quantity"=>100],
        ["ID"=>7, "Name"=>"Ice-creame", "Price"=>30, "Quantity"=>100]

    ];



    $_SESSION["Products"]=$products;



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php
            foreach($products[0] as $key => $value) {
                echo "<th>$key</th>";
            }
            ?>

            
            <th>ACTION</th>
        </tr>

        <?php foreach($products as $product): ?>
        <tr>
            <?php
            foreach($products[0] as $key => $value) {
                echo "<td>$product[$key]</td>";
            }
            ?>
            <td>
                <a href="read.php?id=<?php echo $product['ID']; ?>">READ</a> || 
                <a href="update.php?id=<?php echo $product['ID']; ?>">UPDATE</a> || 
                <a href="delete.php?id=<?php echo $product['ID']; ?>">DELETE</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h4>Create a Product =><a href="create.php">CREATE</a></h4>
    <a href="home.php">GO BACK</a>
</body>
</html>