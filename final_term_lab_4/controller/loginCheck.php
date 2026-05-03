<?php
session_start();
header('Content-Type: application/json');

if (!isset($_POST['user'])) {
    echo "invalid user";
    exit();
}

$data = json_decode($_POST['user'], true);

$username = trim($data['username'] ?? '');
$password = $data['password'] ?? '';

if ($username == '' || $password == '') {
    echo "no fields can be empty";
    exit();
}

if ($username === $_SESSION['user']['username'] && $password === $_SESSION['user']['password']) {
    $_SESSION['status'] = true;
    $_SESSION['username'] = $username;
    setcookie('status', 'true', time() + 3600, '/');

    header("location: ../view/home.php");
} 

else {
    echo"invalid username";
}
?>
