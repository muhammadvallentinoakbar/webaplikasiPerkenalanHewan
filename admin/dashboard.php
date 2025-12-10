<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard Admin</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
<h2>Dashboard Admin</h2>
<a href="data-hewan.php">Aplikasi Kelola Data Hewan</a> |
<a href="../logout.php">Logout</a>
</div>

</body>
</html>
