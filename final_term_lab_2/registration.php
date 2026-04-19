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
        <form action="">
            <fieldset id="outerBox">
                <legend>REGISTRATION</legend>
                Name: <input type="text" name="name"><br>
                <hr>
                Email: <input type="email" name="email"><br>
                <hr>
                User Name: <input type="text" name="userName"><br>
                <hr>
                Password: <input type="password" name="pass"><br>
                <hr>
                Confirm Password: <input type="password" name:"Cpass"><br>
                <hr>
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="Male">Male<br>
                    <input type="radio" name="gender" value="Female">Female<br>                   
                    <input type="radio" name="gender" value="Other">Other
                </fieldset><hr>

                <fieldset>
                    <legend>Date of Birth</legend>
                    <input type="text">/ <input type="text">/<input type="text"> <i>(dd/mm/yyyy)</i>
                </fieldset><hr>

                <input type="submit">
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