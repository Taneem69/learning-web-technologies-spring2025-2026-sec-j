<?php
$DOB = "";

if (isset($_POST['DOB'])) {
    $DOB = $_POST['DOB'];
    echo "DOB ".$DOB;
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
    <form action="form3C.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <Legend>Name</Legend>
            Date:<input type="date" name="DOB" value="<?php if(isset($_POST['DOB'])) echo $_POST['DOB']; ?>"><br>
            <hr>
            <input type="submit" name="" id="">
    </fieldset>
    </form>

</body>
</html>