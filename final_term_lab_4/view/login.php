<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/loginDesign.css">
    <script scr="../controller/ajx.js"></script>

    <title>Login</title>
</head>
<body>
    <div>
        <form onsubmit="event.preventDefault(); ajaxLogin();">
            Username: <input type="text" id="username" required><br><br>
            Password: <input type="password" id="password" required><br><br>

            <input type="submit" value="Login">
            <a href="signup.php">Sign Up</a>
        </form>

        <p id="message"></p>
    </div>
</body>
</html>
