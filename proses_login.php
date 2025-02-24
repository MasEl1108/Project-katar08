<?php
$admin_user = "admin";
$admin_pass = "password123";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $admin_user && $password === $admin_pass) {
    echo "<script>alert('Login berhasil!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Username atau password salah!'); window.location='login.php';</script>";
}
?>
