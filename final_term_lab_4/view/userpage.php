<?php
    session_start();


    $users=$_SESSION['users'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="home.php">Go Back to Home page</a>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>ACTION</th>
        </tr>

        <?php  foreach($users as $user){ ?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['username']?></td>
                <td><?=$user['email']?></td>
                <td>
                    <a href="edit.php?id=<?=$user['id']?>"> EDIT </a> | 
                    <a href="../controller/deleteUser.php?id=<?=$user['id']?>"> DELETE </a> | 
                    <a href="read.php?id=<?=$user['id']?>"> DETAILS </a> 
                </td>
            </tr>

        <?php }  ?>
    </table>

    <h4>Create An User <a href="createUser.php">CREATE</a></h4>
</body>
</html>