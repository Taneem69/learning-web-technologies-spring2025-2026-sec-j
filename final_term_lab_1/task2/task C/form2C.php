<?php
$email = "";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo "email ".$email;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        fieldset{
            width:100px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <form action="form2C.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <Legend>Name</Legend>
            Email:<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><br>
            <hr>
            <input type="submit" name="" id="">
    </fieldset>
    </form>

</body>
</html>