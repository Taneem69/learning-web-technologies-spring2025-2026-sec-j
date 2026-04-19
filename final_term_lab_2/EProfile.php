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
            Logged in as<a href="home.php">Name</a>|
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


        <form action="">
        <fieldset>
            <legend>EDIT PROFILE</legend>
            Name: <input type="text" name="name" value="" id="">
            <hr>
            Email: <input type="email" name="email" value="" id="">
            <hr>
            Gender: <input type="radio" name="gender" value="Male" id="">Male <input type="radio" name="gender" value="Female" id="">Female <input type="radio" name="gender" value="Other" id="">Other
            <hr>
            Date of Birth: <input type="text" name="DOB" value="" id="">(dd/mm/yyyy)
            <hr>
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