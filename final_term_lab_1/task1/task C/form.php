<?php
$name = "";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    echo "Name ".$name;
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
    <form action="form.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <Legend>Name</Legend>
            Name:<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"><br>
            <hr>
            <input type="submit" name="" id="">
    </fieldset>
    </form>

</body>
</html>