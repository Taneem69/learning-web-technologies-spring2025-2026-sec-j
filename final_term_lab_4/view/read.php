<?php

    session_start();

    $id=$_GET["id"];

    $users=$_SESSION["users"]??[];

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
    <title>View User</title>
</head>
<body>
        <h1>View User</h1>
        <a href='userpage.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="" enctype="multipart/form-data">
            ID:             <input type="text" name="id" value="<?=$user['id']?>" readonly/> <br>
            Username:       <input type="text" name="username" value="<?=$user['username']?>" readonly/> <br>
            Email:    <input type="email" name="email" value="<?=$user["email"]?>" readonly/> <br>           
        </form>
</body>
</html>