<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="../controller/loginCheck.php" method="post" enctype="mulitpart/form-data">
        Username: <input type="text" name="username" id=""><br>
        Password: <input type="password" name="password" id=""><br>
        <input type="submit" name="submit" id=""><a href="signup.php">SignUp</a>

    </form>
</body>
</html>