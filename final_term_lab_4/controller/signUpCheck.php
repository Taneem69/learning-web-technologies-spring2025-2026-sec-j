<?php
session_start();
header('Content-Type: application/json');

if (!isset($_POST['user'])) {
    echo "invalid input";
    exit();
}

$data = json_decode($_POST['user'], true);

$email = trim($data['email'] ?? '');
$username = trim($data['username'] ?? '');
$password = $data['password'] ?? '';
$confp = $data['confp'] ?? '';

if ($email === '' || $username === '' || $password === '' || $confp === '') {
    echo "no field can't be empty";
    exit();
}

if ($password !== $confp) {
    echo"password and confirm passwrod do not match";
    exit();
}

$_SESSION['user'] = [
    'email' => $email,
    'username' => $username,
    'password' => $password
];

header("location: ../view/login.php");
?>
