<?php
session_start();
header('Content-Type: application/json');

if (!isset($_POST['user'])) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
    exit();
}

$data = json_decode($_POST['user'], true);

$username = trim($data['username'] ?? '');
$password = $data['password'] ?? '';

if ($username === '' || $password === '') {
    echo json_encode(['status' => 'error', 'message' => 'Username and password are required']);
    exit();
}

if (isset($_SESSION['user']) && 
    $username === $_SESSION['user']['username'] && 
    $password === $_SESSION['user']['password']) {
    
    $_SESSION['status'] = true;
    $_SESSION['username'] = $username;
    setcookie('status', 'true', time() + 3600, '/');

    echo json_encode(['status' => 'success', 'message' => 'Login successful']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid username or password']);
}
?>