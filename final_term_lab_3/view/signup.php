<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp page</title>
</head>
<body>
    <form action="../controller/signupCheck.php" method="post" enctype="multipart/form-data">
        Email: <input type="email" name="email" id=""><br>
        Username: <input type="text" name="username" id=""><br>
        Password: <input type="password" name="password" id=""><br>
        Confirm Password: <input type="password" name="confPass" id=""><br>
        <input type="submit" name="submit" id="">
    </form>
</body>
</html>