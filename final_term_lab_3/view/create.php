<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <a href="viewProduct.php">GO BACK</a><br><br>

    <form action="../controller/createPerform.php" method="post">
        ID: <input type="text" name="id"><br>
        Name: <input type="text" name="name"><br>
        Price: <input type="text" name="price"><br>
        Quantity: <input type="text" name="quantity"><br>
        <input type="submit" name="submit" value="CREATE">
    </form>
</body>
</html>