<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../login.php");
}
include '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Data Hewan</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
<h2>Data Hewan</h2>
<a href="tambah.php">Tambah Hewan</a> |
<a href="dashboard.php">Kembali</a>
<hr>

<table border="1" cellpadding="8">
<tr>
    <th>Nama</th>
    <th>Jenis</th>
    <th>Gambar</th>
    <th>Deskripsi</th>     <!-- Tambahan -->
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM tb_hewan");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['jenis'] ?></td>
    <td><img src="<?= $d['gambar'] ?>" width="80"></td>
    
    <!-- Tampilkan deskripsi -->
    <td><?= nl2br($d['deskripsi']) ?></td>

    <td>
        <a href="edit.php?id=<?= $d['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $d['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</div>

</body>
</html>
