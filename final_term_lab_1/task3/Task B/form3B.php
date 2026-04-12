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
    <form action="form3B.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <Legend>DOB</Legend>
            Date:<input type="date" name="DOB" value=""><br>
            <hr>
            <input type="submit" name="" id="">
    </fieldset>
    </form>

</body>
</html>