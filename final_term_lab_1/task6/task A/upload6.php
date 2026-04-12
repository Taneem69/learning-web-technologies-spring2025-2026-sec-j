<?php

if (isset($_POST['blood']) && $_POST['blood'] != "") {
    $blood = $_POST['blood'];

    echo "Blood Group: " . $blood;
} else {
    echo "Please select a blood group";
}

?>