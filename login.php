<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    if ($_POST['user'] == "admin" && $_POST['pass'] == "123") {
        $_SESSION['login'] = true;
        header("location: admin/dashboard.php");
    } else {
        echo "<script>alert('Login salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login dulu ya Adik adik</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Login Admin</h2>
<form method="POST">
    <input type="text" name="user" placeholder="Username"><br>
    <input type="password" name="pass" placeholder="Password"><br>
    <button name="login">Login</button>
</form>
</div>

</body>
</html>
