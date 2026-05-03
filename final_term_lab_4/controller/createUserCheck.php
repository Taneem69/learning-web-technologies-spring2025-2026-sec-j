<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if (isset($_POST['create'])) {
    $id = trim($_POST['id']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);

    if ($id === '' || $username === '' || $email === '') {
        echo "null id/name/email!";
        exit;
    }

    $_SESSION['users'][$id] = [
        'id' => $id,
        'username' => $username,
        'email' => $email,

    ];

    header('location: ../view/userpage.php');
    exit;
}
// echo "please submit form...";
?>