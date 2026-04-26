<?php

    session_start();
    if(!isset($_SESSION["state"])){
        header("location: login.php");
    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Hello <?php echo $_SESSION["username"]?></H1>
    <a href="viewProduct.php">View Product</a> | | <a href="../controller/logout.php">Logout</a>

</body>
</html>