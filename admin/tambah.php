<?php
session_start();
if (!isset($_SESSION['login'])) { header("location: ../login.php"); }
include '../config.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi, "INSERT INTO tb_hewan VALUES('', '$nama', '$jenis', '$gambar', '$deskripsi')");
    header("location: data-hewan.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Hewan</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
<h2>Tambah Hewan</h2>

<form method="POST">
    Nama:<br>
    <input type="text" name="nama"><br>

    Jenis:<br>
    <select name="jenis">
        <option>Herbivora</option>
        <option>Karnivora</option>
        <option>Omnivora</option>
    </select><br>

    Link Gambar:<br>
    <input type="text" name="gambar"><br>

    Deskripsi:<br>
    <textarea name="deskripsi"></textarea><br>

    <button name="simpan">Simpan</button>
</form>

</div>

</body>
</html>
