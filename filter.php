<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Filter Hewan</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Jenis Hewan: <?= $_GET['jenis']; ?></h2>
<a href="index.php">Kembali</a>
<hr>

<?php
$jenis = $_GET['jenis'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_hewan WHERE jenis='$jenis'");
while ($d = mysqli_fetch_array($data)) {
?>
<div class="card">
    <h3><?= $d['nama'] ?></h3>
    <img src="<?= $d['gambar'] ?>">
    <p><?= $d['deskripsi'] ?></p>
</div>
<?php } ?>

</div>

</body>
</html>
