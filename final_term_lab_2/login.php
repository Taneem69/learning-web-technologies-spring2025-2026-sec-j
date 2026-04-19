<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    setcookie('remember', '', time() - 3600, '/');
    header("location: login.php");
    exit();
}

if (isset($_SESSION['status']) && $_SESSION['status']===true) {
    header("location: dashboard.php");
    exit();
}

if (!isset($_SESSION['users'])) {
    $_SESSION['users']=array();
}

if (isset($_COOKIE['remember']) && !isset($_SESSION['status'])) {
    $username=$_COOKIE['remember'];
    if (isset($_SESSION['users'][$username])) {
        $_SESSION['status']=true;
        $_SESSION['current_user']=$username;
        header("location: dashboard.php");
        exit();
    }
}

$error='';
if (isset($_POST['submitted'])) {
    $username=trim($_POST['userName']);
    $password=trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error='Username and Password are required.';
    } else {
        if (isset($_SESSION['users'][$username]) && $_SESSION['users'][$username]['password']===$password) {
            $_SESSION['status']=true;
            $_SESSION['current_user']=$username;
            if (isset($_POST['checked'])) {
                setcookie('remember', $username, time() + 2592000, '/');
            }
            header("location: dashboard.php");
            exit();
        } else {
            $error='Invalid username or password.';
        }
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
            align-item: center;

        }

        div{
            padding-top:20px;
        }

        main{
            display:flex;
            justify-content:center;
            height:75vh;
        }

        footer{
            text-align:center;
            padding-top:10px;
        }

        #outerBox{
            width:300px;
        }
    </style>
    <title>Login Page</title>

</head>
<body>
    <header>
        <h2>XCompany</h4>
        <div>
            <a href="home.php">Home</a>|
            <a href="login.php">Login</a>|
            <a href="registration.php">Registration</a>
        </div>

    </header>
    <hr>

    <main>
        <form method="post">
            <fieldset id="outerBox">
                <legend>LOGIN</legend>
                <?php if (!empty($error)) echo '<p class="error">' . $error . '</p>'; ?>
                User Name: <input type="text" name="userName" value=""><br><br>
                Password: <input type="password" name="password" value=""><br>
                <hr>
                <input type="checkbox" name="checked">Remember Me <br>
                
                <input type="submit" name="submitted" value="submit"> <a href="forgotPassword.php">Forgot Password?</a>


            </fieldset>
        </form>
    </main>

    <hr>

    <footer>
        <p>Copyright c 2017</p>
    </footer>
</body>
</html>