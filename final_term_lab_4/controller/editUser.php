<?php
session_start();

if (isset($_POST['edit'])) {
    $id = trim($_POST['id']);
    if (!isset($_SESSION['users'][$id])) {
        echo "User not found";
        exit;
    }

    $_SESSION['users'][$id]['username'] = trim($_POST['username']);
    $_SESSION['users'][$id]['email'] = trim($_POST['email']);

    header('location: ../view/userpage.php');
    exit;
}
// echo "please submit the form...";
?>