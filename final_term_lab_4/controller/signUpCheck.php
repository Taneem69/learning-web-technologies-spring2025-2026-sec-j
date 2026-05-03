<?php
session_start();
header('Content-Type: application/json');

if (!isset($_POST['user'])) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
    exit();
}

$data = json_decode($_POST['user'], true);

$email    = trim($data['email'] ?? '');
$username = trim($data['username'] ?? '');
$password = $data['password'] ?? '';
$confp    = $data['confp'] ?? '';

if ($email === '' || $username === '' || $password === '' || $confp === '') {
    echo json_encode(['status' => 'error', 'message' => 'All fields are required']);
    exit();
}

if ($password !== $confp) {
    echo json_encode(['status' => 'error', 'message' => 'Password and confirm password do not match']);
    exit();
}

$_SESSION['user'] = [
    'email'    => $email,
    'username' => $username,
    'password' => $password
];

echo json_encode(['status' => 'success', 'message' => 'Account created successfully']);
?>