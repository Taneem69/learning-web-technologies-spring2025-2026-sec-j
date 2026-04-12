<?php

if (isset($_POST['degrees'])) {
    $degrees = $_POST['degrees'];

    echo "Selected Degrees:<br>";

    foreach ($degrees as $d) {
        echo $d . "<br>";
    }
}

?>