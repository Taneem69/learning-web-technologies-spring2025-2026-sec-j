<?php
session_start();
if (!isset($_SESSION['users'])) {
    $_SESSION['users']=array();
}

$step=1;
$error='';
$email='';

if (isset($_POST['submitted'])) {
    $email=trim($_POST['Email']);
    if (empty($email)) {
        $error='Email is required.';
    } else {
        $found=false;
        $foundUser='';
        foreach ($_SESSION['users'] as $uname => $udata) {
            if ($udata['email']===$email) {
                $found=true;
                $foundUser=$uname;
                break;
            }
        }
        if (!$found) {
            $error='Email not found.';
        } else {
            $code=rand(100000, 999999);
            $_SESSION['reset_code']=$code;
            $_SESSION['reset_email']=$email;
            $_SESSION['reset_user']=$foundUser;
            $step=2;
        }
    }
}

if (isset($_POST['verify'])) {
    $enteredCode=trim($_POST['code']);
    if (isset($_SESSION['reset_code']) && $enteredCode==$_SESSION['reset_code']) {
        $_SESSION['status']=true;
        $_SESSION['current_user']=$_SESSION['reset_user'];
        unset($_SESSION['reset_code'], $_SESSION['reset_email'], $_SESSION['reset_user']);
        header("location: dashboard.php");
        exit();
    } else {
        $error='Invalid code.';
        $step=2;
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
    <title>Password Recovery Page</title>
    <script>
        function showCode() {
            var code="<?php echo isset($_SESSION['reset_code']) ? $_SESSION['reset_code'] : ''; ?>";
            if (code !== "") {
                alert("Your reset code is: " + code);
            }
        }
        <?php if ($step==2) echo 'window.onload=showCode;'; ?>
    </script>

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
        <?php if ($step==1): ?>
        <form method="post">
            <fieldset id="outerBox">
                <legend>FORGOT PASSWORD</legend>
                <?php if (!empty($error)) echo '<p class="error">' . $error . '</p>'; ?>
                Email: <input type="email" name="Email" value="<?php echo $email; ?>"><br><br>
                <hr>
                <input type="submit" name="submitted" value="Submit">
            </fieldset>
        </form>
        <?php else: ?>
        <form method="post">
            <fieldset id="outerBox">
                <legend>ENTER CODE</legend>
                <?php if (!empty($error)) echo '<p class="error">' . $error . '</p>'; ?>
                <p>A reset code has been shown in a popup. Please enter it below.</p>
                Code: <input type="text" name="code"><br><br>
                <input type="submit" name="verify" value="Verify">
            </fieldset>
        </form>
        <?php endif; ?>
    </main>

    <hr>

    <footer>
        <p>Copyright c 2017</p>
    </footer>
</body>
</html>