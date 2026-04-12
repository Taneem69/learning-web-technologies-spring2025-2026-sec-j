<?php

if (isset($_POST['blood']) && $_POST['blood'] != "") {
    $blood = $_POST['blood'];

    echo "Blood Group: " . $blood;
} else {
    echo "Please select a blood group";
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
    <form action="upload6B.php" method="post" enctype="multipart/form-data">
    <fieldset>
    <legend>Blood Group</legend>
    Blood Group:
    <select name="blood">
        <option value="">--Select--</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>
    <input type="submit" name="submit">
    </fieldset>
    </form>

</body>
</html>