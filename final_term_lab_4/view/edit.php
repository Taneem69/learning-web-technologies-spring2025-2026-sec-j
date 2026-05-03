<?php
    session_start();
    // if (!isset($_SESSION["user"]) || !isset($_SESSION["status"]) || $_SESSION["status"] !== true) {
    // header("Location: login.php");
    // exit;
    // }
    $id = $_GET['id'];
    $users = $_SESSION['users'] ?? [];
    $user = $users[$id] ?? null;
    foreach($users as $u){
        if($u['id'] == $id){
            $user = $u;
            break;
        }
    }
?>


<html lang="en">
<head>
    <title>Edit user</title>
</head>
<body>
        <h1>Edit user</h1>
        <a href='userpage.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="../controller/edituser.php" enctype="multipart/form-data">
            ID:             <input type="text" name="id" value="<?=$user['id']?>" readonly/> <br>
            Username:       <input type="text" name="username" value="<?=$user['username']?>"/> <br>
            email:    <input type="email" name="email" value="<?=$user['email']?>"/> <br>
                            <input type="submit" name="edit" value="Update"/>
                        
        </form>
</body>
</html>