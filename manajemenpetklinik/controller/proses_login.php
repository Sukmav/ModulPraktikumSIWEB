<?php
session_start();
$users = [
    'admin' => 'admin123',
    'dokter' => 'dokter123',
    'resepsionis' => 'resepsionis123'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['user'] = $username;
        if ($remember) {
            setcookie('username', $username, time() + (30 * 24 * 60 * 60), '/'); // 30 hari
        } else {
            setcookie('username', '', time() - 3600, '/');
        }
        header('Location: ../index.php');
        exit();
    } else {
        $error = 'Username atau Password salah!';
        header('Location: ../login.php?error=' . urlencode($error));
        exit();
    }
} else {
    header('Location: ../login.php');
    exit();
}
?>