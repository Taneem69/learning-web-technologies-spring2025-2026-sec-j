<?php
$gender="";

if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
    echo "Selected Gender: " . $gender;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        fieldset{
            width:150px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <form action="form4C.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <Legend>Gender</Legend>
            Male<input type="radio" name="gender" value="<?php if(isset($_POST['gender'])) echo $_POST['gender']; ?>"><br>
            female<input type="radio" name="gender" value="<?php if(isset($_POST['gender'])) echo $_POST['gender']; ?>"><br>
            Other<input type="radio" name="gender" value="<?php if(isset($_POST['gender'])) echo $_POST['gender']; ?>"><br>
            <hr>
            <input type="submit" name="" id="">
    </fieldset>
    </form>

</body>
</html>