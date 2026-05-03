<?php
    session_start();
   
    // if (!isset($_SESSION["user"]) || !isset($_SESSION["status"]) || $_SESSION["status"] !== true) {
    // header("Location: login.php");
    // exit;
    // }
    // $id = $_GET['id'];
    // $products = $_SESSION['products'];
    // $product= [];
    // foreach($products as $p){
    //     if($p['id'] == $id){
    //         $product = $p;
    //         break;
    //     }
    // }
?>


<html lang="en">
<head>
    <title>Create User</title>
</head>
<body>
        <h1>Create Product</h1>
        <a href='userpage.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="../controller/createUserCheck.php" enctype="multipart/form-data">
            ID:             <input type="text" name="id" value="" /> <br>
            Username:       <input type="text" name="username" value=""/> <br>
            email:          <input type="email" name="email" value=""/> <br>
                            <input type="submit" name="create" value="Create"/>
                        
        </form>
</body>
</html>