<?php



if (isset($_POST['degrees'])) {
    $degrees = $_POST['degrees'];

    echo "Selected Degrees:<br>";

    foreach ($degrees as $d) {
        echo $d . "<br>";
    }
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
    <form action="form5C.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <Legend>Degree</Legend>
        SSC<input type="checkbox" name="degrees[]" value="SSC"><br>
        HSC<input type="checkbox" name="degrees[]" value="HSC"><br>
        BSc<input type="checkbox" name="degrees[]" value="BSc"><br>
        MSc<input type="checkbox" name="degrees[]" value="MSc"><br>
        <hr>
        <input type="submit" name="" id="">
    </fieldset>
    </form>

</body>
</html>