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
    <form action="upload6C.php" method="post" enctype="multipart/form-data">
    <fieldset>
    <legend>Blood Group</legend>
    Blood Group:
    <select name="blood">
        <option value="">Select</option>
        <option value="A+" <?php if(isset($_POST['blood']) && $_POST['blood']=="A+") echo "selected"; ?>>A+</option>
        <option value="A-" <?php if(isset($_POST['blood']) && $_POST['blood']=="A-") echo "selected"; ?>>A-</option>
        <option value="B+" <?php if(isset($_POST['blood']) && $_POST['blood']=="B+") echo "selected"; ?>>B+</option>
        <option value="B-" <?php if(isset($_POST['blood']) && $_POST['blood']=="B-") echo "selected"; ?>>B-</option>
        <option value="AB+" <?php if(isset($_POST['blood']) && $_POST['blood']=="AB+") echo "selected"; ?>>AB+</option>
        <option value="AB-" <?php if(isset($_POST['blood']) && $_POST['blood']=="AB-") echo "selected"; ?>>AB-</option>
        <option value="O+" <?php if(isset($_POST['blood']) && $_POST['blood']=="O+") echo "selected"; ?>>O+</option>
        <option value="O-" <?php if(isset($_POST['blood']) && $_POST['blood']=="O-") echo "selected"; ?>>O-</option>
    </select>
    <input type="submit" name="submit">
    </fieldset>
    </form>

</body>
</html>