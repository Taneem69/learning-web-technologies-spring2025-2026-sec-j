<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header("location: login.php");
    exit();
}
$currentUser = $_SESSION['current_user'];
$userData = $_SESSION['users'][$currentUser];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h2{
            display: inline;
        }
        header{
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        

        main{
            display:flex;
            justify-content:space-between;
            height:75vh;
        }

        footer{
            text-align:center;
            padding-top:10px;
        }


        .dash{
            width: 400px;
            border-right:2px solid black;
        }


        ul{
            margin-left:100px;
            margin-top:100px;
        }

        .welcome{
            postion:relative;
            background-color:black;
        }

        .mess{
            position:absolute;
            left:420px;
        }



    </style>
    <title>Dashboard</title>

</head>
<body>
    <header>
        <h2>XCompany</h4>
        <div>
            Logged in as<a href="home.php">Name</a>|
            <a href="login.php">Logout</a>
        </div>

    </header>
    <hr>

    <main>
        <div class="dash">
            <h2><b>Account</b></h4><hr>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li><br>
                <li><a href="profile.php">View Profile</a></li><br>
                <li><a href="EProfile.php">Edit Profile</a></li><br>
                <li><a href="ChangePP.php">Change Profile picture</a></li><br>
                <li><a href="ChangePassword.php">Change Password</a></li><br>
                <li><a href="login.php">Logout</a></li><br>
            </ul>
        </div>

        <div class="welcome">
            <h2 class="mess">
                Welcome Bob
            </h2>
        </div>
        
    </main>

    <hr>

    <footer>
        <p>Copyright c 2017</p>
    </footer>
</body>
</html>