<?php
session_start();
if (!isset($_SESSION['login'])) { header("location: ../login.php"); }
include '../config.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_hewan WHERE id='$id'");
$d = mysqli_fetch_array($data);

if (isset($_POST['update'])) {
    mysqli_query($koneksi, "UPDATE tb_hewan SET
        nama='$_POST[nama]',
        jenis='$_POST[jenis]',
        gambar='$_POST[gambar]',
        deskripsi='$_POST[deskripsi]'
        WHERE id='$id'"
    );
    header("location: data-hewan.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Hewan</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
<h2>Edit Hewan</h2>

<form method="POST">
    Nama:<br>
    <input type="text" name="nama" value="<?= $d['nama'] ?>"><br>

    Jenis:<br>
    <select name="jenis">
        <option <?= $d['jenis']=="Herbivora"?"selected":"" ?>>Herbivora</option>
        <option <?= $d['jenis']=="Karnivora"?"selected":"" ?>>Karnivora</option>
        <option <?= $d['jenis']=="Omnivora"?"selected":"" ?>>Omnivora</option>
    </select><br>

    Link Gambar:<br>
    <input type="text" name="gambar" value="<?= $d['gambar'] ?>"><br>

    Deskripsi:<br>
    <textarea name="deskripsi"><?= $d['deskripsi'] ?></textarea><br>

    <button name="update">Update</button>
</form>

</div>

</body>
</html>
