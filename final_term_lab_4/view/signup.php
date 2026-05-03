<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../controller/ajx.js"></script>
    <title>Sign Up</title>
</head>
<body>
    <div>
        <form onsubmit="event.preventDefault(); ajaxSignup();">
            Email: <input type="email" id="email" required><br><br>
            Username: <input type="text" id="username" required><br><br>
            Password: <input type="password" id="password" required><br><br>
            Confirm Password: <input type="password" id="confp" required><br><br>

            <input type="submit" value="Sign Up">
            <a href="login.php">Login</a>
        </form>

        <p id="message"></p>
    </div>
</body>
</html>
