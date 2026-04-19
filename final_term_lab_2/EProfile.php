<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header("location: login.php");
    exit();
}
$currentUser = $_SESSION['current_user'];
$userData = $_SESSION['users'][$currentUser];

$error = '';
if (isset($_POST['submitted'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $dob = trim($_POST['DOB']);

    if (empty($name) || empty($email) || empty($gender) || empty($dob)) {
        $error = 'All fields are required.';
    } else {
        $_SESSION['users'][$currentUser]['name'] = $name;
        $_SESSION['users'][$currentUser]['email'] = $email;
        $_SESSION['users'][$currentUser]['gender'] = $gender;
        $_SESSION['users'][$currentUser]['dob'] = $dob;
        header("location: profile.php");
        exit();
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
    <title>Edit Profile</title>

</head>
<body>
    <header>
        <h2>XCompany</h4>
        <div>
            Logged in as<a href="home.php"><?php  echo $userData["name"]?></a>|
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
            <legend>EDIT PROFILE</legend>
            <?php if (!empty($error)) echo '<p class="error">' . $error . '</p>'; ?>
            Name: <input type="text" name="name" value="<?php echo $userData['name']; ?>"><hr>
            Email: <input type="email" name="email" value="<?php echo $userData['email']; ?>"><hr>
            Gender:
            <input type="radio" name="gender" value="Male" <?php if($userData['gender']=='Male') echo 'checked'; ?>> Male
            <input type="radio" name="gender" value="Female" <?php if($userData['gender']=='Female') echo 'checked'; ?>>Female
            <input type="radio" name="gender" value="Other" <?php if($userData['gender']=='Other') echo 'checked'; ?>>Other<hr>
            Date of Birth: <input type="text" name="DOB" value="<?php echo $userData['dob']; ?>"> (dd/mm/yyyy)<hr>
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