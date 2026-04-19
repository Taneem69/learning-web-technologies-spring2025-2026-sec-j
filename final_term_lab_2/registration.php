<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
}

$error = '';
$success = '';

if (isset($_POST['submitted'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $userName = trim($_POST['userName']);
    $pass = trim($_POST['pass']);
    $confPass = trim($_POST['ConfPass']);
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $day = trim($_POST['day']);
    $month = trim($_POST['month']);
    $year = trim($_POST['year']);

    if (empty($name) || empty($email) || empty($userName) || empty($pass) || empty($confPass) || empty($gender) || empty($day) || empty($month) || empty($year)) {
        $error = 'All fields are required.';
    } elseif ($pass !== $confPass) {
        $error = 'Passwords do not match.';
    } elseif (isset($_SESSION['users'][$userName])) {
        $error = 'Username already exists.';
    } else {
        $dob = $day . '/' . $month . '/' . $year;
        $_SESSION['users'][$userName] = array(
            'name' => $name,
            'email' => $email,
            'username' => $userName,
            'password' => $pass,
            'gender' => $gender,
            'dob' => $dob,
            'profile_pic' => ''
        );
        $success = 'Registration successful. You can now login.';
        header("location: login.php");
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
            width:45vw;
        }
    </style>
    <title>Registration Page</title>

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
                <legend>REGISTRATION</legend>

                Name: <input type="text" name="name" value=""><br>
                <hr>
                Email: <input type="email" name="email" value=""><br>
                <hr>
                User Name: <input type="text" name="userName" value=""><br>
                <hr>
                Password: <input type="password" name="pass" value=""><br>
                <hr>
                Confirm Password: <input type="password" name="ConfPass" value=""> <br>
                <hr>
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="Male">Male<br>
                    <input type="radio" name="gender" value="Female">Female<br>                   
                    <input type="radio" name="gender" value="Other">Other
                </fieldset><hr>

                <fieldset>
                    <legend>Date of Birth</legend>
                    <input type="text" name="day" value="">/ <input type="text" name="month" value="">/<input type="text" name="year" value=""> <i>(dd/mm/yyyy)</i>
                </fieldset><hr>

                <input type="submit" name="submitted" value="submit">
                <input type="reset">



            </fieldset>
        </form>
    </main>

    <hr>

    <footer>
        <p>Copyright c 2017</p>
    </footer>
</body>
</html>