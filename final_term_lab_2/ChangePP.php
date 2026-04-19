<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header("location: login.php");
    exit();
}
$currentUser=$_SESSION['current_user'];
$userData=$_SESSION['users'][$currentUser];
$error='';
$success='';

if (isset($_POST['submitted']) && isset($_FILES['profile_pic'])) {
    $file=$_FILES['profile_pic'];
    if ($file['error']===0 && !empty($file['name'])) {
        $filename=basename($file['name']);
        $_SESSION['users'][$currentUser]['profile_pic']=$filename;
        $success='Profile picture updated.';
    } else {
        $error='Please select a file.';
    }
}
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


        fieldset{
            width:500px;
            height:200px;
            position:relative;
            left:-320px;
            top:120px;
        }
       



    </style>
    <title>Change Profile Picture</title>

</head>
<body>
    <header>
        <h2>XCompany</h4>
        <div>
            Logged in as<a href="home.php"><?php echo $userData['name']; ?></a>|
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


        <form method="post">
        <fieldset>
            <legend>EDIT PROFILE PICTURE</legend>
            <?php if (!empty($error)) echo '<p class="error">' . $error . '</p>'; ?>
            <?php if (!empty($success)) echo '<p class="success">' . $success . '</p>'; ?>
            <img src="<?php echo !empty($userData['profile_pic']) ? $userData['profile_pic'] : 'default.png'; ?>"alt="Current Picture" style="height:100px; width:100px;"><br>
            <input type="file" name="profile_pic"><br>
            <hr>
            <input type="submit" name="submitted" value="submit" id="">
        </fieldset>
        </form>

        
    </main>

    <hr>

    <footer>
        <p>Copyright c 2017</p>
    </footer>
</body>
</html>