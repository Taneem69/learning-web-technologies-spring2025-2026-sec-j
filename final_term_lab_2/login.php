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
        <form action="">
            <fieldset id="outerBox">
                <legend>LOGIN</legend>
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