<?php
session_start();

$id = $_GET['id'] ?? '';
if ($id !== '' && isset($_SESSION['users'][$id])) {
    unset($_SESSION['users'][$id]);
}
header('location: ../view/userpage.php');
exit;