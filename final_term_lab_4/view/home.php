<?php
session_start();

if(!isset($_COOKIE['status']) || !isset($_SESSION['status'])){
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello <?php echo $_SESSION['username'];?></h1>

    <a href="userpage.php">User List</a> |
    <a href="../controller/logout.php">Logout</a>
</body>
</html>
